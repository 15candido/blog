@props(['comment'])
<div class="max-w mx-auto bg-gray-100 border border-gray-200 shadow-md rounded-xl overflow-hidden md:max-w-full">
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