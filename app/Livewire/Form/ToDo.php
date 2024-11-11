<?php

namespace App\Livewire\Form;

use Laravel\Jetstream\InteractsWithBanner;
use Livewire\Component;

class ToDo extends Component
{
    use InteractsWithBanner;


    public function render()
    {
        return view('livewire.form.to-do');
    }
}
