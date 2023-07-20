@extends('layouts.layout')
@section('content')
<div class="wrapper">
    <h1 class="flex-center title">
        Burgery
    </h1>
    @foreach ($menus as $menu)
    <div class="menu">
        <a href="">
                <div class="img">
                    <img src="{{$menu->img}}" width="260px" src="{{$menu->img}}">
                </div>
                <div class="border">
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
<div class="full-height">

</div>
@endsection