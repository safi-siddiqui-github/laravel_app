<footer class="fixed bottom-0 left-0 w-full z-20">
    <div class="flex flex-col w-full py-3 px-5 bg-white border-t-2">

        <nav class="flex items-center gap-5 justify-between">

            <a href="#hero" class="flex flex-col items-center justify-center">
                <img src="{{asset('storage/icons/home.svg')}}" alt="home" class="w-10 object-contain">
                <span class="font-medium">Home</span>
            </a>

            <a href="{{route('web.home')}}#section-one" class="flex flex-col items-center justify-center">
                <img src="{{asset('storage/icons/apps.svg')}}" alt="apps" class="w-10 object-contain">
                <span class="font-medium">Apps</span>
            </a>

            <a href="#section-two" class="flex flex-col items-center justify-center">
                <img src="{{asset('storage/icons/code.svg')}}" alt="code" class="w-10 object-contain">
                <span class="font-medium">Tech</span>
            </a>

            @auth
            <a href="{{route('web.logout')}}" class="flex flex-col items-center justify-center">
                <img src="{{asset('storage/icons/logout.svg')}}" alt="logout" class="w-10 object-contain">
                <span class="font-medium">Logout</span>
            </a>
            @else
            <a href="{{route('web.login')}}" class="flex flex-col items-center justify-center">
                <img src="{{asset('storage/icons/login.svg')}}" alt="login" class="w-10 object-contain">
                <span class="font-medium">Login</span>
            </a>
            @endauth

        </nav>

    </div>
</footer>