<x-dropdown-menu>

    {{-- Button  --}}
    <x-slot name="trigger">
        <button class="w-full lg:w-32 lg:inline-flex py-2 pl-3 pr-9 text-left text-sm font-semibold">
            {{isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories'}} {{-- apply bg to current category --}}
            <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;" /> {{-- icon --}}
        </button>
    </x-slot>

    {{-- Menu Item  --}}
    <x-dropdown-item href="/?{{ http_build_query(request()->except('category', 'page')) }}" 
    :active="request()->routeIs('home')"> All </x-dropdown-item>

    @foreach($categories as $category)
        <x-dropdown-item href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}" 
        :active="request()->is('categories/'.$category->slug)">
            {{ ucwords($category->name)}}
        </x-dropdown-item>
    @endforeach

</x-post-dropdown>