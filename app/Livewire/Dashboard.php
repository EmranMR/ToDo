<?php

namespace App\Livewire;

use App\ToDoStatus;
use Illuminate\Http\Request;
use Laravel\Jetstream\InteractsWithBanner;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Dashboard extends Component
{
    use InteractsWithBanner;

    // Validation rules for real time validation
    #[Validate('required|alpha_num:ascii')]
    public string $title;

    #[Validate('required|alpha_num:ascii')]
    public string $description;

    public ToDoStatus $status = ToDoStatus::New;

    public int $category;

    public array $tags;

    /**
     * Clears the form
     *
     * @return void  */
    public function clearFields()
    {
        $this->reset();
    }

    /**
     * Saves the todo in the Database
     *
     * @return void
     */
    public function save(Request $request)
    {
        $request
            ->user()
            ->todos()
            ->create([
                'title' => $this->title,
                'description' => $this->description ?? null,
                'status' => ToDoStatus::New,
            ]);

        $this->banner('Your to do has been saved');
        $this->clearFields();

    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
