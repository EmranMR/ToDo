<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot>


<form class="flex flex-col w-4/12 mx-auto mt-10" wire:submit="testing">
<h2 class="font-extrabold text-xl mb-5">To Do List:</h2>
    <label for="title">Title</label>
    <input 
        wire:model="title"
        id="title" 
        type="text" 
        name="title" 
        spellcheck="true"
        placeholder="Title" />

        <label for="description"></label>
        <textarea 
            wire:model="description"
            name="description" 
            id="description"
            placeholder="notes (optional)"
            ></textarea>

    <label for="tags">Tags</label>

    <input 
        wire:model="tag"
        id="tags" 
        type="text" 
        name="tags" 
        spellcheck="false"
        placeholder="Tags (optional)"/>
    <label for="category">Category</label>

    <input
        wire:model="category"
        id="category"
        type="text" 
        name="category" 
        spellcheck="false"
        placeholder="Category (optional)"/>


    <div class="flex justify-around pt-5">
        <button class="rounded-lg border-solid border-4 px-6 py-2"><a href="{{route('todo.index')}}">Save</a></button>
        <button class="rounded-lg border-solid border-4 px-6 py-2" type="button" wire:click="clearField">Clear</button>
    </div>

</form>

