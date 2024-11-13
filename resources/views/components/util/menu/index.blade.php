    <menu 
		class="grid  {{url()->current() != route('dashboard') ? 'grid-cols-3' : 'grid-cols-2'}} 
				text-indigo-50 bg-blue-600  items-start justify-items-stretch *:p-5">
			@if(url()->current() != route('dashboard'))
	            <x-util.menu.button :href="route('dashboard')" value="back"/>
			@endif
            <x-util.menu.button :href="route('todo.index')" value="My List"/>
            <x-util.menu.button :href="route('todo.archives')" value="Archive"/>
    </menu >
