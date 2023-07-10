<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Burger;

class BurgerController extends Controller
{
    public function create(){
        return view('burgers.create');
    }

    public function index(){
        return view('burgers.index');
    }
}
