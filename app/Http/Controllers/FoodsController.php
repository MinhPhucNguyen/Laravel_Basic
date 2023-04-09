<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class FoodsController extends Controller
{
    public function index()
    {
        $foods = Food::all(); //lay tat ca trong ban ghi
        // $foods = Food::where('name', '=', 'sushi') //lay san pham co ten la sushi
        // ->firstOrFail();    
        //    -> get();
        // dd($foods);
        return view('foods.index', [
            'foods' => $foods
        ]);
    }

    //CREATE
    public function create()
    {
        return view('foods.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        //Cach 1
        // $food = new Food();
        // $food->name = $request->input('name');
        // $food->count = $request->input('count');
        // $food->description = $request->input('description');

        //Cach 2
        $food = Food::create([
            'name' => $request->input('name'),
            'count' => $request->input('count'),
            'description' => $request->input('description'),
        ]);
        //save to database
        $food->save();
        return redirect('/foods');
    }

    //EDIT & UPDATE
    public function edit($id)
    {
        $food = Food::find($id);
        return view('foods.edit')->with('food', $food);
    }

    public function update(Request $request, $id)
    {
        // dd($request);
        $food = Food::where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'count' => $request->input('count'),
                'description' => $request->input('description')
            ]);

        return redirect('/foods');
    }

    //DELETE
    public function destroy($id)
    {
        // dd("Hello " . $id);
        $food = Food::find($id);
        $food->delete();

        return redirect('/foods');
    }
}
