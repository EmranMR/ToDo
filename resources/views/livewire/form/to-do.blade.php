<form class="flex flex-col w-4/12 mx-auto mt-10" wire:submit="">
<h2 class="font-extrabold text-xl mb-5">To Do List:</h2>
    <label for="title">Title</label>
    <input 
        id="title" 
        type="text" 
        name="title" 
        spellcheck="true"
        placeholder="Title" />

        <label for="description"></label>
        <textarea 
            name="description" 
            id="description"
            placeholder="notes"
            ></textarea>

    <label for="tags">Tags</label>

    <input 
        id="tags" 
        type="text" 
        name="tags" 
        spellcheck="false"
        placeholder="Tags (optional)"/>
    <label for="category">Category</label>

    <input 
        id="category" 
        type="text" 
        name="category" 
        spellcheck="false"
        placeholder="Category (optional)"/>


    <div class="flex justify-around pt-5">
        <button class="rounded-lg border-solid border-4 px-6 py-2" type="submit">Save</button>
        <button class="rounded-lg border-solid border-4 px-6 py-2" type="submit">Clear</button>
    </div>
    
</form>
