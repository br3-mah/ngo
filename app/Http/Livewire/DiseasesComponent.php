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
    public $isUpdate;
    public $results;
    public $record_update;
    public $disease_name, $description;

    protected $rules = [
        'disease_name' => 'required',
        'description' => 'required'
    ];

    public function mount(Disease $disease)
    {
        $this->initializeFields();
        $this->model = $disease;
        $this->results = $disease->with('team')->get();
        $this->isPopped = false;
        $this->isUpdate = false;
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

    public function hydrated()
    {
        $this->mount($this->model);
    }

    public function toggleModal()
    {
        $this->isPopped = !$this->isPopped;
    }

    public function toggleUpdateModal()
    {
        $this->isUpdate = !$this->isUpdate;
    }

    public function store()
    {
        try {
            $data = Disease::firstOrCreate([
                'name' => $this->disease_name,
                'description' => $this->description,
                'slug' => $this->disease_name,
                'user_id' => auth()->user()->id,
                'team_id' => auth()->user()->current_team_id
            ]);    

            $this->isPopped == false;
        } catch (Exception $e) {
            dd($e);
        }
    }

    public function update(){
        try {
            Disease::where('id', $this->record_update)
            ->update([
                'name' => $this->disease_name,
                'description' =>  $this->description
            ]);

            $this->toggleUpdateModal();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function edit($id, Disease $disease)
    {
        $this->record_update = $id;
        $data = $disease->find($id);
        $this->disease_name = $data->name;
        $this->description = $data->description;
        $this->toggleUpdateModal();
    }

    public function destroy($id, Disease $disease)
    {
        $disease->find($id)->delete();
        session()->flash('message', 'Deleted Successfully.');
    }
}
