<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{

    public function create(){
        $menus = Menu::all();
        return view('burgers.create',[
            'menus' => $menus
        ]);
    }
    
    public function index(){
        $menus = Menu::all();
        return view('burgers.index',[
            'menus' => $menus
        ]);
    }
}
