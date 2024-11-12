<?php

namespace App\Livewire\Todo;

use App\Models\Todo;
use App\Models\User;
use App\ToDoStatus;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Laravel\Jetstream\InteractsWithBanner;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Request;

class Index extends Component
{
    use InteractsWithBanner;
    

    #[Computed]
    public function todos(): Collection
    {
        /** @var Builder $todos */
        $todos = Auth::user()->todos();
        
        return $todos->where('status', '!=', ToDoStatus::Archived)->get();
        
        
    }

    public function archive(int $id): void {

        /** @var Todo $todo */
        $todo = Todo::find($id);

        if(!$todo) {
            $this->dangerBanner('Todo does not exist!');
            return;
        }
        // 
        // Remove from the collection
        $this->todos->forget($id);

        // Change Status
        $todo->status = ToDoStatus::Archived;
        $todo->save();

        // Notify
        $this->banner("Successfully Archived");

    }

    public function render()
    {
        return view('livewire.todo.index');
    }
}
