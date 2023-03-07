<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Translation extends Component
{
    public $translation="en";
    public function render()
    {
        \App::setLocale($this->translation);
        return view('livewire.translation');
    }
}
