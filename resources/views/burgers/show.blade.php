@extends('layouts.layout')
@section('content')
<div class="full-height">
    <div class="wrapper">
        <h1 class="flex-center title">
            Zamównienie - {{$burger->id}}
        </h1>
        <div class="flex border container l-z g">
                <p class="flex-center">
                    {{$burger->Imię}}
                    {{$burger->Nazwisko}} - {{$burger->Rodzaj}} -
                
                @if($burger->dodatki == ["brak dodatkow"])
                        Brak dodatków
                @else
                        Extra dodatki:
                    <ul class="li">
                        @foreach ($burger->dodatki as $dodatek)
                            <li>
                               {{$dodatek}}
                            </li>
                        @endforeach
                    </ul>
                @endif
                </p>
                <div class="flex-center">
                    <form action="{{route('burgers.delete',$burger->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <div class="button-delete">
                            <input type="submit" value="Zamówienie wydane">
                        </div>
                        </form>
                </div>
        </div>
        <a href="/burger/lista-zamówień" class="l-z back-to-menu">
            <- Powrót do listy Zamóweń
        </a>
    </div>
</div>
@endsection