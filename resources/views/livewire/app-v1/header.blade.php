<header class="flex gap-5 py-5 px-5 md:px-10 justify-between items-center shadow">
    <nav class="flex ">
        <div class="flex items-center justify-center gap-2">
            <img src="{{asset('storage/logo/moon.png')}}" alt="Laracamp Logo" class="w-7">
            <a href="{{route('web.home')}}">
                <h1 class="text-lg sm:font-medium">Laracamp</h1>
            </a>
        </div>
    </nav>

    <!-- <nav class="md:flex gap-4 font-medium tracking-tight hidden">
        <a href="">Apps</a>
        <a href="">Features</a>
        <a href="">About</a>
    </nav> -->

    <nav class="flex gap-4 font-medium">
        @guest
        <a href="{{route('web.login')}}" class="px-5 py-2 text-sm rounded-full text-white bg-blue-700 hover:bg-black transition-all duration-200 ease-in-out">Log In</a>
        @endguest
        @auth
        <a href="{{route('web.logout')}}" class="px-5 py-2 text-sm rounded-full text-white bg-blue-700 hover:bg-red-700 transition-all duration-200 ease-in-out">Log Out</a>
        @endauth
    </nav>
</header>