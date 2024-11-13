<?php

namespace App\Livewire\Todo;

use App\Models\Todo;
use App\ToDoStatus;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use InvalidArgumentException;
use Laravel\Jetstream\InteractsWithBanner;
use Livewire\Attributes\Computed;
use Livewire\Component;
use RuntimeException;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;

class Archives extends Component
{
    use InteractsWithBanner;

    /**
     * Retrieves the todos for the front end
     * These can be accessed via property
     * internally magic method is used
     * computed also has performance benefit as it is
     * cached
     *
     * @throws InvalidArgumentException
     * @throws BadRequestException
     */
    #[Computed]
    public function todos(): Collection
    {
        /** @var Builder $todos */
        $todos = Auth::user()->todos();

        return $todos->where('status', '=', ToDoStatus::Archived)->get();

    }

    /**
     * Delete an archived todo from database
     *
     * @return void
     *
     * @throws RuntimeException
     */
    public function delete(int $id)
    {
        Todo::destroy($id);
        $this->banner('Deleted');
    }

    /**
     * Deletes all archived todo in one go
     *
     * @return void
     *
     * @throws InvalidArgumentException
     * @throws BadRequestException
     * @throws RuntimeException
     */
    public function deleteAll()
    {
        foreach ($this->todos() as $todo) {
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
