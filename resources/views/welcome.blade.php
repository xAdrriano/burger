@extends('layouts.layout')
@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <img src="/img/logo-burger.png" width="200" height="200" alt="logo burger">
        <div class="title m-b-md">
            Najlepsze burgiry w mieście!
        </div>
        <a href="{{route('burgers.create')}}">Zamów</a>
        <a href="{{route('burgers.index')}}">Menu</a>
        @if(session()->has('mssg'))
            <p>{{session('mssg')}}</p>
        @endif
    </div>
</div>
@endsection