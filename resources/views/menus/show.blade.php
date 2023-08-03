@extends('layouts.layout')
@section('content')
<div class="flex">
    <div class="full-height">
        <div class="">
            <img src="{{$menu->img}}" width="886px" alt="Rodzaj">
        </div>
    </div>
    <div class=""> 
        <div class="back-to-menu margin-50-5 content">
            <a href="/burger/menu">
                <div>
                    << Wróć do menu
                </div>
            </a>
        </div>
        <div class="flex-center">
            <div class="nazwa margin-50-5 content">
                {{$menu->Rodzaj}}
            </div> 
        </div>
        <div class="margin-50-5">
            <h1>
                Skład:
            </h1>
        </div> 
        <div class="margin-50-5 Opis">
            <h3>
                {{$menu->Opis}} 
            </h3>
        </div> 
        <div class="flex-center">
            <div class="cena margin-50-5 content">
                {{$menu->Cena}} PLN
            </div>
        </div>
        <div class="back-to-menu margin-50-5 content">
            <a href="/burger/zamow">
                <div>
                    Zamów online >>
                </div> 
            </a>
        </div>
    </div>
</div>
@endsection