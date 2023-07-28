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
        $burger->dodatki = request('dodatki');
        if($burger->dodatki == 0)
        {
            $burger->dodatki = ["brak dodatkow"];
        }

        if($burger->Imię != 0 && $burger->Nazwisko != 0 && $burger->Rodzaj != 0)
        {
            $burger->save();
            return redirect('/')->with('mssg','Dziękujemy za twoje zamównienie!');
        }
        else
        {
            return redirect('/burger/zamow');
        }
    }

}

