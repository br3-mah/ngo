<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Disease;

class DiseasesComponent extends Component
{
    use WithFileUploads;

    public $model;
    public $isPopped;
    public $results;
    public $disease_name, $description;

    protected $rules = [
        'disease_name' => 'required',
        'description' => 'required'
    ];

    public function mount(Disease $disease)
    {
        $this->model = $disease;
        $this->results = $disease->with('team')->get();
        $this->isPopped = false;
    }

    public function initializeFields()
    {
        $this->disease_name = ''; 
        $this->description = '';   
    }

    public function render()
    {
        return view('livewire.diseases-component');
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
        try {
            $data = Disease::UpdateOrCreate([
                'name' => $this->disease_name,
                'description' => $this->description,
                'slug' => $this->disease_name,
                'user_id' => auth()->user()->id,
                'team_id' => auth()->user()->current_team_id
            ]);    

            $this->toggleModal();
            $this->initializeFields();
        } catch (Exception $e) {
            dd($e);
        }
    }

    public function edit($id, Disease $disease)
    {
        $data = $disease->find($id);
        $this->disease_name = $data->name;
        $this->description = $data->description;
        $this->toggleModal();
    }

    public function destroy($id, Disease $disease)
    {
        $disease->find($id)->delete();
        session()->flash('message', 'Deleted Successfully.');
    }
}
