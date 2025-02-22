<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Journal;

class DeletionComponent extends Component
{
    public $musing;

    public function mount($musing)
    {
        $this->musing = $musing;
    }

    public function deleteMusing() {
        $musing_id = $this->musing->entry_id;
        $found_musing = Journal::find($musing_id);
        if ($found_musing) {
            Journal::destroy($musing_id);
        }
    }

    public function render()
    {
        return view('livewire.deletion-component');
    }
}
