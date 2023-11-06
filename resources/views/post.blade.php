<x-GuestLayout>
    <div class="max-w-7xl flex-col mx-auto my-6 space-y-6">
        <h1 class="font-bold text-2xl">{!! $post->title !!}</h1>
        <div class="flex space-x-2">
            Writing By <a href="/authors/{{ $post->author->username }}" class="underline mx-1">{{ $post->author->name}} </a> in
            <a href="/categories/{{ $post->category->slug} }" class="flex items-center font-bold text-xs uppercase underline">
                {{ $post->category->name}}
            </a>
        </div>

        <p class=" leading-6">
                {!! $post->body !!}
                </p>

                <a href="/" class="">
                    <button class="bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded-md 
            font-extrabold text-base uppercase">
                        Go Back
                    </button>
                </a>

        </div>
</x-GuestLayout>