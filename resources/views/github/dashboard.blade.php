@extends('layout.layout')
@section('content')
<div class="flex p-5 items-center justify-center md:h-screen">
    <div class="flex flex-col border rounded-md p-5 gap-5">
        <h1 class="text-2xl font-bold">Github</h1>

        <p>Hi !</p>

        <a href="{{route('auth.github.logout')}}">Logout</a>

    </div>
</div>
@endsection