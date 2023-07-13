@extends('layouts.layout')
@section('content')
<div>
    <div>
        <h1>
            Składanie zamówenia
        </h1>
        <form action="/burger" method="POST">
            @csrf
            <label for="Imię">Imię:</label>
            <input type="text" id="Imię" name="Imię">
            <label for="Nazwisko">Nazwisko:</label>
            <input type="text" id="Nazwisko" name="Nazwisko">
            <label for="Rodzaj">Wybierz burgera: </label>
            <select name="Rodzaj" id="Rodzaj">
                <option value="Classic">Classic</option>
                <option value="Pepik">Pepik</option>
                <option value="Becon-BBQ">Becon BBQ</option>
            </select>
            <label for="Rozmiar">Wybierz rozmiar burgera: </label>
            <select name="Rozmiar" id="Rozmiar">
                <option value="M">M</option>
                <option value="L">L</option>
            </select>
            <label for="Bułka">Bułka: </label>
            <select name="Bułka" id="Bułka">
                <option value="Pszenna">Pszenna</option>
                <option value="Maślana">Maślana</option>
            </select>
            <fieldset>
                <label>Dodatki:</label>
                <input type="checkbox" name="dodatki" value="Burger-wołowy">Burger wołowy 180g
                <input type="checkbox" name="dodatki[]" value="Ser-smażony">Ser smażony
                <input type="checkbox" name="dodatki[]" value="Burger-wieprzowy">Burger wieprzowy
                <input type="checkbox" name="dodatki[]" value="Jajko">Jajko
                <input type="checkbox" name="dodatki[]" value="Becon">Becon
                <input type="checkbox" name="dodatki[]" value="Ser">Ser
                <input type="checkbox" name="dodatki[]" value="Nachosy">Nachosy
            </fieldset>
            <input type="submit" value="Zamów">
        </form>
    </div>
    <a href="/">
        <- Powrót do strony głównej
    </a>
</div>
@endsection