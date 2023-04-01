<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $title = 'Laravel Course';
        $day = 16;
        $month = 9;
        $year = 2002;
        // return view('products.index', compact('title', 'day', 'month', 'year')); // compact() creates an array

        // $name = 'Nguyen Minh Phuc';
        // return view('products.index')->with('name', $name);
        //"with" mothod can only send 1 parameter

        //Send an associative array
        $myphone = [
            'name' => 'iphone 14',
            'year' => 2022,
            'isFavourited' => true
        ];
        // return view('products.index', compact('myphone'));
        //send directly
        print_r(route('products'));
        return view('products.index');
    }

    public function detail($productName, $id){
        $phones = [
            'iphone 15' => 'iphone 15',
            'samsung' => 'samsung',
        ];
        
        return view('products.index', [
            'product' => $phones[$productName] ?? 'unknown product'
        ]);
    }
}
