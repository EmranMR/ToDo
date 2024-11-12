    <menu class="grid grid-cols-3 text-indigo-50 bg-blue-600  items-start justify-items-stretch *:p-5">
            <x-util.menu.button :href="route('todo.create')" value="New"/>
            <x-util.menu.button :href="route('todo.index')" value="My List"/>
            <x-util.menu.button :href="route('todo.create')" value="Archive"/>
    </menu >
