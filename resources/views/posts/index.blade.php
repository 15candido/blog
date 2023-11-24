<x-GuestLayout>
    
    @include('posts._carousel')

    <div class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @if($posts->count())
            <x-post-grid :posts="$posts" />
        @else
            <p class="text-center">
                No posts yet. Please came back later.
            </p>
        @endif
    </div>
</x-GuestLayout>