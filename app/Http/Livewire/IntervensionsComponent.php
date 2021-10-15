<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Module;
use App\Models\Disease;
use App\Models\Intervension;

class IntervensionsComponent extends Component
{

    public $model;
    public $isPopped;
    public $results;
    public $modules;
    public $name, $description, $module_id;

    protected $rules = [
        'module_name' => 'required',
        'description' => 'required'
    ];

    public function mount(Intervension $intervension)
    {
        $this->modules = Module::with('team')->get();
        $this->model = $intervension;
        $this->results = $intervension->with('modules')->with('team')->get();
        // dd($this->results);
        $this->isPopped = false;
    }

    public function initializeFields()
    {
        $this->name = ''; 
        $this->description = '';
        $this->module_id = '';   
    }

    public function render()
    {
        return view('livewire.intervensions-component');
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
            $data = Intervension::UpdateOrCreate([
                'name' => $this->name,
                'description' => $this->description,
                'slug' => $this->name,
                'module_id' => $this->module_id,
                'user_id' => auth()->user()->id,
                'team_id' => auth()->user()->current_team_id
            ]);    
            $this->toggleModal();
        } catch (Exception $e) {
            dd($e);
        }
    }

    public function edit($id, Intervension $intervension)
    {
        $data = $intervension->find($id);
        $this->name = $data->name;
        $this->description = $data->description;
        $this->toggleModal();
    }

    public function destroy($id, Intervension $intervension)
    {
        $intervension->find($id)->delete();
        session()->flash('message', 'Deleted Successfully.');
    }
}
