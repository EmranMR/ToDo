<?php

namespace App\Livewire\Todo;

use App\Models\Todo;
use App\ToDoStatus;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Laravel\Jetstream\InteractsWithBanner;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Archives extends Component
{
    use InteractsWithBanner;

    #[Computed]
    public function todos(): Collection
    {
        /** @var Builder $todos */
        $todos = Auth::user()->todos();
        
        return $todos->where('status', '=', ToDoStatus::Archived)->get();
        
    }

    public function delete(int $id)
    {
        Todo::destroy($id);
        $this->banner('Deleted');
    }
    
    public function deleteAll()
    {
        foreach($this->todos() as $todo)
        {
            $todo->destroy($todo->id);
        }

        $this->todos()->empty();

        $this->banner('Successfully Deleted');
    }
    public function render()
    {
        return view('livewire.todo.archives');
    }
}
