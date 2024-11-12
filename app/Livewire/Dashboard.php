<?php

namespace App\Livewire;

use App\Models\User;
use App\ToDoStatus;
use Illuminate\Http\Request;
use Laravel\Jetstream\InteractsWithBanner;
use Livewire\Attributes\Locked;
use Livewire\Component;

class Dashboard extends Component
{
    use InteractsWithBanner;

    public string $title ='';
    public string $description ='';
    public ToDoStatus $status = ToDoStatus::New;

    #[Locked]
    public User $user;

    public int $category;
    public array $tags;

    public function mount(Request $request) {

        $this->user = $request->user();

    }


    public function clearFields() {
        $this->reset();
    }

    public function save() {
        
    }

    public function testing() {

    }
    
    public function render()
    {
        return view('livewire.dashboard');
    }
}
