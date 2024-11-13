<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot>
<ul class="w-2/4 mx-auto mt-4 ">
	@foreach ($this->todos as $todo)
		<li x-data="{alert: false}" 
			class=" mb-4 flex justify-between {{$loop->index % 2 == 0 ? 'bg-blue-100' : '' }}">

			<p class="ml-4  text-lg font-light decoration-2 decoration-red-500" 
				:class="{'line-through': alert}">
				{{$todo->title}}
			</p>
			<div class="w-1/2 flex justify-around">
				<button 
					class=" mr-2 font-bold text-lg text-blue-50 bg-blue-900 rounded-md px-6 py-2"
					type="button">Detail</button>
				<button 
					@mouseenter="alert = true"
					@mouseleave="alert = false"
					wire:click="archive({{$todo->id}})"
					class=" font-bold text-red-50 bg-red-400 rounded-md px-4 py-2 text-lg " 
					type="button">Archive</button>
			</div>
		</li>
	@endforeach
</ul>
