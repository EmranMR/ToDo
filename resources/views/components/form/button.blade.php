@props(['action', 'value'])
 <button class=" font-bold rounded-lg  hover:outline-red-500 hover:text-red-100 hover:outline hover:outline-4 bg-red-400 w-32 h-12  px-6 py-2" type="button" wire:click="{{$action}}">
    {{$value}}
</button>
