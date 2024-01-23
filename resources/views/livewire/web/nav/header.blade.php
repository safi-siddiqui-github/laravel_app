<div>
    <header class="flex gap-5 p-5 border-b justify-between items-center">
        <nav class="flex ">
            <a href="{{route('web.home')}}">
                <h1 class="text-lg">Laracamp</h1>
            </a>
        </nav>

        <nav class="flex gap-4">
            <a href="">About</a>
        </nav>

        <nav class="flex gap-4">
            @guest
            <a href="{{route('auth.web.login')}}">Login</a>
            @endguest
            @auth
            <a href="{{route('auth.web.logout')}}">Logout</a>
            @endauth
        </nav>
    </header>
</div>