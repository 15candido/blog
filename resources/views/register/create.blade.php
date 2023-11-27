<x-GuestLayout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 lg:mt-20 space-y-6 bg-gray-100 border border-gray-200 p-6 rounded-lg">
            <h1 class="font-bold text-lg uppercase">Register Form</h1>
            <form method="POST" action="/register" class="">
                @csrf
                <div class="mb-6">
                    <label for="name" class="block mb-2 font-bold text-xs text-gray-700 uppercase">name</label>
                    <input type="text" name="name" id="name" required class="w-full p-2 rounded-lg border border-gray-400">
                    @error('name')
                        <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                    @enderror 
                </div>
                <div class="mb-6">
                    <label for="username" class="block mb-2 font-bold text-xs text-gray-700 uppercase">Username</label>
                    <input type="text" name="username" id="username" required class="w-full p-2 rounded-lg border border-gray-400">
                    @error ('username')
                        <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 font-bold text-xs text-gray-700 uppercase">E-mail</label>
                    <input type="text" name="email" id="email" required class="w-full p-2 rounded-lg border border-gray-400">
                    @error('email')
                        <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 font-bold text-xs text-gray-700 uppercase">Password</label>
                    <input type="password" name="password" id="password" required class="w-full p-2 rounded-lg border border-gray-400">
                    @error('password')
                        <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <button class="text-white px-4 py-2 rounded bg-blue-400 hover:bg-blue-500 ">Submit</button>
                </div>
            </form>
        </main>
    </section>
</x-GuestLayout>