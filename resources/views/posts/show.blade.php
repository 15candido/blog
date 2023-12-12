<x-GuestLayout>

    <section class="px-6 py-8">
        <main class="max-w-7xl mx-auto mt-10 lg:mt-20 space-y-6">
            <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
                <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                    <img src="/images/illustration-1.png" alt="" class="rounded-xl">

                    <p class="mt-4 block text-gray-400 text-xs">
                        Published <time>{{$post->created_at->diffForHumans()}}</time>
                    </p>

                    <div class="flex items-center lg:justify-center text-sm mt-4">
                        <img src="/images/lary-avatar.svg" alt="Lary avatar">
                        <div class="ml-3 text-left">
                            <h5 class="font-bold">
                                <a href="/?author={{ $post->author->username }}">{{$post->author->name}}</a>
                            </h5>
                            <h6>Mascot at Laracasts</h6>
                        </div>
                    </div>
                </div>

                <div class="col-span-8">
                    <div class="hidden lg:flex justify-between mb-6">
                        <a href="/" class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                            <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                                <g fill="none" fill-rule="evenodd">
                                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                    </path>
                                    <path class="fill-current" d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                    </path>
                                </g>
                            </svg>

                            Back to Posts
                        </a>

                        <div class="space-x-2">
                            <x-category-button :category="$post->category" />
                        </div>
                    </div>

                    <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                        {{$post->title}}
                    </h1>

                    <div class="space-y-4 lg:text-lg leading-loose">
                        {!! $post->body !!}
                    </div>
                </div>

                <div class="mt-10 col-span-8 md:col-start-5 space-y-6">

                    <x-panel>
                        <form action="#">
                            @csrf
                            <header class="flex space-x-6 items-center">
                                <div class="flex-shrink-0 justify-center">
                                    <img src="https://i.pravatar.cc/192?u={{ auth()->id()}}" alt="user-profil" class="w-16 h-16 object-cover md:w-16 md:h-full rounded-full">
                                </div>
                                <h2 class="font-bold text-base normal-case">Want to participate?</h2>
                            </header>
                            <div class="mt-6">
                                <textarea name="body" id="body" cols="30" rows="5" class="w-full text-sm text-gray-500 p-6 focus:outline-none focus:ring focus:ring-blue-500 
                            focus:rounded-xl" placeholder="Quick, thing of something to say!"></textarea>
                            </div>
                            <footer class="flex mt-2 pt-2 justify-end items-center uppercase border-t border-gray-200">
                                <button type="submit" class="font-semibold text-sm text-white py-2 px-10 bg-blue-500 uppercase 
                            rounded-xl shadow-md hover:bg-blue-600">Post</button>
                            </footer>
                        </form>
                    </x-panel>
                    @foreach($post->comments as $comment)
                    <x-post-comment :comment="$comment" />
                    @endforeach
                </div>
            </article>
        </main>
    </section>
</x-GuestLayout>