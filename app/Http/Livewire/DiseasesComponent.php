<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class DiseasesComponent extends Component
{
    use WithFileUploads;

    public $isPopped;
    public $caption_title, $sub_headline, $media_type, $background_desc, $media_file;
    protected $rules = [
        // 'cover_image' => 'required',
        'caption_title' => 'required',
        'sub_headline' => 'required',
        'media_type' => 'required',
        'background_desc' => 'required',
        'media_file' => 'required',
    ];

    public function mount()
    {
        $this->isPopped = false;
    }

    public function render()
    {
        return view('livewire.diseases-component');
    }

    public function toggleModal()
    {
        $this->isPopped = !$this->isPopped;
    }
}
