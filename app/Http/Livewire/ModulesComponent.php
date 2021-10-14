<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Module;

class ModulesComponent extends Component
{

    public $model;
    public $isPopped;
    public $results;
    public $module_name, $description, $disease_id;

    protected $rules = [
        'module_name' => 'required',
        'description' => 'required'
    ];

    public function mount(Module $module)
    {
        $this->model = $module;
        $this->results = $module->with('team')->get();
        $this->isPopped = false;
    }

    public function initializeFields()
    {
        $this->module_name = ''; 
        $this->description = '';   
    }

    public function render()
    {
        return view('livewire.modules-component');
    }

    public function dehydrated()
    {
        $this->mount($this->model);
    }

    public function toggleModal()
    {
        $this->isPopped = !$this->isPopped;
        if($this->isPopped == false)
        {
            $this->initializeFields();
        }
    }

    public function store()
    {
        try {
            // $validatedData = $this->validate();
            // dd($validatedData);
            $data = Module::UpdateOrCreate([
                'name' => $this->module_name,
                'description' => $this->description,
                'slug' => $this->module_name,
                'disease_id' => $this->disease_id,
                'user_id' => auth()->user()->id,
                'team_id' => auth()->user()->current_team_id
            ]);    
            $this->toggleModal();
        } catch (Exception $e) {
            dd($e);
        }
    }

    public function edit($id, Module $module)
    {
        $data = $module->find($id);
        $this->module_name = $data->name;
        $this->description = $data->description;
        $this->toggleModal();
    }

    public function destroy($id, Module $module)
    {
        $module->find($id)->delete();
        session()->flash('message', 'Deleted Successfully.');
    }
}
