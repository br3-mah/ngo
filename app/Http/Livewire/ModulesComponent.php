<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Module;
use App\Models\Disease;

class ModulesComponent extends Component
{

    public $model;
    public $isPopped;
    public $results;
    public $diseases;
    public $module_name, $description, $disease_id;

    protected $rules = [
        'module_name' => 'required',
        'description' => 'required'
    ];

    public function mount(Module $module)
    {
        $this->diseases = Disease::with('team')->get();
        $this->model = $module;
        $this->results = $module->with('diseases')->with('team')->get();
        
        $this->isPopped = false;
    }

    public function initializeFields()
    {
        $this->module_name = ''; 
        $this->description = '';
        $this->disease_id = '';   
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
    }

    public function store()
    {
        // dd($this->disease_id);
        try {
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
