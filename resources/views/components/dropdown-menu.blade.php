
@props(['trigger'])
<div x-data="{ show: false }" @click.away="show = false">
    {{-- Trigger --}}
    <div @click="show = !show">
        {{$trigger }}
    </div>
    
    {{-- Links --}}
    <div x-show="show" class="absolute z-50 w-full max-h-52 py-2 mt-2 rounded-xl bg-gray-100 overflow-auto" style="display:none">
        {{ $slot }}
    </div>
</div>

