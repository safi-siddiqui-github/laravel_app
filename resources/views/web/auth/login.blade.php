@extends('web.layout.layout-v2')
@section('content')
<div class="flex flex-col">

    <div class="flex flex-col lg:flex-row md:items-center lg:gap-5 ">

        <div class="hidden lg:flex flex-col items-center justify-center lg:w-1/2 xl:w-2/3 lg:h-[690px] xl:h-[800px] bg-amber-100">
            <img src="{{asset('storage/animated/work-animate.gif')}}" alt="Login Side" class="object-contain w-full lg:h-[400px] xl:h-[500px]">
        </div>

        <div class="flex flex-col px-5 py-5 md:py-10 lg:px-7 gap-10 bg-white md:w-[600px] lg:w-1/2 xl:w-1/3">
            <div class="flex items-center justify-center gap-2">
                <img src="{{asset('storage/logo/moon.png')}}" alt="Laracamp Logo" class="w-7">
                <h1 class="text-lg font-medium">Laracamp</h1>
            </div>

            <div class="flex flex-col gap-10">
                <div class="flex flex-col items-center gap-1 md:gap-2">
                    <h2 class="text-2xl md:text-4xl font-serif">
                        Welcome Back
                    </h2>
                    <p class="tracking-tight text-xs md:text-sm">
                        Enter your email and password to access your account
                    </p>
                </div>

                <div class="flex flex-col gap-4">
                    <div class="flex flex-col gap-1 font-medium">
                        <label for="email" class="text-sm">Email</label>
                        <input type="text" id="email" class="bg-slate-50 rounded-md p-2 text-sm tracking-tight focus:outline-black" placeholder="Enter your email">
                    </div>

                    <div class="flex flex-col gap-1 font-medium">
                        <label for="password" class="text-sm">Password</label>
                        <input type="password" id="password" class="bg-slate-50 rounded-md p-2 text-sm tracking-tight focus:outline-black" placeholder="Enter your password">
                    </div>

                    <div class="flex justify-between gap-1 font-medium text-sm items-center">
                        <div class="flex gap-2 items-center">
                            <input type="checkbox" class="checked:bg-blue-600 w-3.5" name="remember" id="remember">
                            <label for="remember" class="">Remember me</label>
                        </div>
                        <a href="">Forgot Passowrd</a>
                    </div>
                </div>

                <div class="flex flex-col md:gap-4 gap-2 text-sm font-medium">
                    <button class="bg-black p-2 rounded-md text-white">Sign In</button>

                    <a href="{{route('auth.google.redirect')}}" class="flex border rounded-md p-2 justify-center gap-5 items-center">
                        <img src="{{asset('storage/icons/google.svg')}}" alt="google Logo" class="w-7">
                        <span>Sign in with Google</span>
                    </a>

                    <a href="{{route('auth.github.redirect')}}" class="flex border rounded-md p-2 justify-center gap-5 items-center">
                        <img src="{{asset('storage/icons/github.svg')}}" alt="github Logo" class="w-7">
                        <span>Sign in with Github</span>
                    </a>
                </div>
            </div>

            <div class="flex flex-wrap items-center justify-center gap-2 text-sm text-center">
                <p class="tracking-tight">
                    Dont have an account?
                </p>
                <p>|</p>
                <a href="{{route('auth.web.login_guest')}}" class="font-medium">Login as Guest</a>
            </div>
        </div>
    </div>
</div>
@endsection