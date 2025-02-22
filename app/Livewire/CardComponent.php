<?php

namespace App\Livewire;

use Livewire\Component;

class CardComponent extends Component
{
    public $musing;

    protected $listeners = ['musingDeleted' => 'removeMusing'];


    public function mount($musing) {
        $this->musing = $musing;
    }
    public function render()
    {
        return view('livewire.card-component');
    }
}
