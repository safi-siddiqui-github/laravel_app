@extends('layout.layout')
@section('content')
<div class="flex p-5 items-center justify-center md:h-screen">
    <div class="flex flex-col border rounded-md p-5 gap-5">
        <h1 class="text-2xl font-bold">Login</h1>

        <div class="flex gap-2">
            <a href="{{route('auth.github.redirect')}}">Github</a>
            <a href="{{route('auth.google.redirect')}}">Google</a>
        </div>

    </div>
</div>
@endsection