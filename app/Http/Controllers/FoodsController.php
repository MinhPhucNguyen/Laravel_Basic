<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class FoodsController extends Controller
{
    public function index (){
        // $foods = Food::all(); //lay tat ca trong ban ghi
        $foods = Food::where('name', '=', 'sushi') //lay san pham co ten la sushi
                // ->firstOrFail();    
                   -> get();
        // dd($foods);
        return view('foods.index', [
            'foods' => $foods
        ]);
    }

    public function create(){
        return view('foods.create');
    }
}
