<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Burger;

class BurgerController extends Controller
{
    public function create(){
        return view('burgers.create');
    }


    public function store(){
        $burger = new Burger();
        $burger->Imię = request('Imię');
        $burger->Nazwisko = request('Nazwisko');
        $burger->Rodzaj = request('Rodzaj');
        $burger->Rozmiar = request('Rozmiar');
        $burger->Bułka = request('Bułka');
        if($burger->dodatki == 0)
        {
            $burger->dodatki = ["brak dodatkow"];
        }
        $burger->save();
        return redirect('/')->with('mssg','Dziękujemy za twoje zamównienie!');
    }
}
