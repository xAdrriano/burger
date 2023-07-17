@extends('layouts.layout')
@section('content')
<h1 class="flex-center">
    Menu
</h1>
<div class="wrapper">
    @foreach ($menus as $menu)
        <div>
            <h3>
                {{$menu->Rodzaj}} 
            </h3>
            <p>
                {{$menu->Opis}} - {{$menu->Cena}}
            </p>
        </div>
    @endforeach
</div>
<div class="full-height">

</div>
@endsection