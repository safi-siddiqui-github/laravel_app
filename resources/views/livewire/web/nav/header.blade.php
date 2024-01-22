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
            <a href="{{route('auth.web.login')}}">Login</a>
            <a href="{{route('auth.web.logout')}}">Logout</a>
        </nav>
    </header>
</div>