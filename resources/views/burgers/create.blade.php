@extends('layouts.layout')
@section('content')
<div class="full-height">
    <div class="wrapper">
        <h1 class="title flex-center">
            Zamówienie
        </h1>
        <div class="flex-center">
            <div class="center g">
                <form action="/burger" method="POST">
                    @csrf
                    <div class="content">
                        <div class="z">
                            <label for="Imię">
                                Imię:
                                <input class="input" type="text" id="Imię" name="Imię">
                            </label>
                            <label for="Nazwisko">
                                Nazwisko:
                                <input class="input" type="text" id="Nazwisko" name="Nazwisko">
                            </label>
                            <label for="Rodzaj">
                                Wybierz burgera: 
                                <select class="select" name="Rodzaj" id="Rodzaj">
                                    @foreach ($menus as $menu)
                                    <option value="{{$menu->Rodzaj}}">
                                        {{$menu->Rodzaj}}-{{$menu->Cena}}
                                    </option>            
                                    @endforeach
                                </select>
                            </label>
                        </div>
                        <label>Dodatki:</label>
                        <div class="dodatki content">
                                <input type="checkbox" id="dodatki[]" name="dodatki[]" value="Burger-wołowy">Burger wołowy 180g
                                <input type="checkbox" id="dodatki[]" name="dodatki[]" value="Ser-smazony">Ser smażony
                                <input type="checkbox" id="dodatki[]" name="dodatki[]" value="Burger-wieprzowy">Burger wieprzowy
                                <input type="checkbox" id="dodatki[]" name="dodatki[]" value="Jajko">Jajko
                                <input type="checkbox" id="dodatki[]" name="dodatki[]" value="Becon">Becon
                                <input type="checkbox" id="dodatki[]" name="dodatki[]" value="Ser">Ser
                                <input type="checkbox" id="dodatki[]" name="dodatki[]" value="Nachosy">Nachosy
                        </div>
                    </div>
                    <div class="button">
                        <input type="submit" value="Zamów">
                    </div>
                </form>
        </div>
        </div>
    </div>
    
</div>
@endsection
