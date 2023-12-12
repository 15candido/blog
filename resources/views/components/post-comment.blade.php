@props(['comment'])
<x-panel class="bg-gray-50 p-0 cursor-pointer hover:bg-gray-200 hover:shadow-lg">
    <div class="max-w-full mx-auto">
        <div class="md:flex ">
            {{-- User avatar --}}
            <div class="md:flex-shrink-0">
                <img src="https://i.pravatar.cc/192?u={{$comment->id}}" alt="user-profil" class="w-full h-36 object-cover md:w-36 md:h-full">
            </div>

            {{-- Comment Detalais --}}
            <div class="w-full p-6">
                <header class="space-y-1">
                    <h3 class="font-semibold text-sm text-blue-400 tracking-wide uppercase">{{$comment->author->name}}</h3>
                    <p class="text-xs">Posted <time> {{$comment->created_at->diffForHumans()}}</time></p>
                </header>
                <div class="mt-2">
                    <p class="text-gray-500">
                        {{$comment->body}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-panel>