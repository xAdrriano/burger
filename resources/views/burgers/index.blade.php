@extends('layouts.layout')
@section('content')
    <div class="wrapper">
        <h2 class="flex-center title">
           Zamówienia
        </h2>
        <div class="wrapper">
            @foreach ($burgers as $burger)
            <div class="l-z">
                <a href="/burger/lista-zamówień/{{$burger->id}}">
                    <div class="flex border container g">
                            <h1>
                                {{$burger->id}}
                            </h1>
                        <div class="center">
                            <p class="flex-center">
                                {{$burger->Imię}}
                                {{$burger->Nazwisko}} - {{$burger->Rodzaj}}
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <div class="full-height">
</div>
@endsection