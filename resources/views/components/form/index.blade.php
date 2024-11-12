@props(['action'])
 <form class="flex flex-col mx-20 mt-10" wire:submit="{{$action}}">
    {{$slot}}
 </form>
