<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot>


<x-form action="save">
<h2 class="font-extrabold text-xl ">Create a To Do List:</h2>
    @error('title')
    <label
        class=" text-sm text-red-500 font-light"
        for="title">{{$message}}</label>
    @enderror
    <input
        class="rounded-full"
        wire:model.blur="title"
        id="title" 
        type="text" 
        name="title" 
        spellcheck="true"
        placeholder="Title" 
        required />

    @error('description')
    <label
        class=" text-sm text-red-500 font-light"
        for="title">{{$message}}</label>
    @enderror
    <textarea
        class="mt-2 rounded-xl" 
        wire:model.blur="description"
        name="description"
        rows="10"
        id="description"
        placeholder="notes (optional)"
        ></textarea>

{{-- 
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

--}}
    <div class="flex justify-around text-white pt-5">
        <button 
            class=" font-bold rounded-lg  hover:outline-yellow-500 hover:text-blue-100 hover:outline hover:outline-4 bg-blue-800 w-32 h-12  px-6 py-2"
            type="submit">
                Save
            </button>
        <button class=" font-bold rounded-lg  hover:outline-red-500 hover:text-red-100 hover:outline hover:outline-4 bg-red-400 w-32 h-12  px-6 py-2" type="button" wire:click="clearFields">Clear</button>
    </div>

</x-form>
