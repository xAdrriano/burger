@extends('layouts.layout')
@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <img src="/img/logo-burger.png" alt="logo burger">
        <div class="title m-b-md">
            Najlepsze burgiry w mieście!
        </div>
        <a href="{{route('burgers.create')}}">Zamów</a>
        <a href="{{route('burgers.index')}}">Menu</a>
    </div>
</div>
@endsection