@extends('layouts.layout')
@section('content')
<div class="full-height">
    <div class="wrapper">
        <h1 class="flex-center title">
           Burgery
        </h1>
        <div class="wrapper">
            @foreach ($menus as $menu)
                <div class="menu flex-center">
                    <a href="/burger/menu/{{$menu->id}}">
                        <img class="img" src="{{$menu->img}}" width="260px" height="260px" src="{{$menu->img}}">
                        <div class="img-hover content flex-center">
                             <div>
                                <h4>
                                    skład:
                                </h4>
                                <p>
                                    {{$menu->Opis}}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection