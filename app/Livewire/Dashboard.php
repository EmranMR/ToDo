<?php

namespace App\Livewire;

use App\Models\User;
use App\ToDoStatus;
use Illuminate\Http\Request;
use Laravel\Jetstream\InteractsWithBanner;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Dashboard extends Component
{
    use InteractsWithBanner;

    #[Validate('required|alpha_num:ascii')]
    public string $title;

    #[Validate('required|alpha_num:ascii')]
    public string $description;
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
        $this->user
            ->todos()
            ->create([
                    'title'=>$this->title,
                    'description'=>$this->description ?? null,
                    'status' => ToDoStatus::New
                ]);

        $this->banner('Your to do has been saved');
        $this->clearFields();

    }

    public function testing() {

    }
    
    public function render()
    {
        return view('livewire.dashboard');
    }
}
