<header class="py-4 shadow-2xl">
    <nav class="max-w-7xl mx-auto md:flex md:justify-between md:items-center">
        <div>
            <a href="/">
                <img src="/images/logo.svg" alt="Laracasts Logo" width="165" height="16">
            </a>
        </div>

        <div class="flex mt-8 md:mt-0 items-center gap-4">

            @auth
                <span class="text-xs font-bold uppercase"> Welcome, {{ auth()->user()->name }} </span>
                <form method="POST" action="/logout" class="text-xs font-bold text-blue-500 ">
                    @csrf
                    <button type="submit"> Log Out </button>

                </form>
            @else
                <a href="/register" class="text-xs font-bold uppercase">Register</a>
                <a href="/login" class="text-xs font-bold uppercase">Login</a>
            @endauth

            <a href="#" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                Subscribe for Updates
            </a>
        </div>
    </nav>
</header>