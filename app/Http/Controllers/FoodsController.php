<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Category;
use App\Rules\Uppercase;
use App\Http\Requests\CreateValidationRequest;

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

    public function show($id)
    {
        $food = Food::find($id);
        $category = Category::find($food->category_id);
        // dd($category);
        $food->category = $category;
        // dd($food);
        return view('foods.show')->with('food', $food);
    }

    //CREATE
    public function create()
    {
        $categories = Category::all();
        // dd($categories);
        return view('foods.create')->with('categories', $categories);
    }

    public function store(CreateValidationRequest $request)
    {
        // dd($request);
        //Cach 1
        // $food = new Food();
        // $food->name = $request->input('name');
        // $food->count = $request->input('count');
        // $food->description = $request->input('description');

        //Cach 2
        dd($request->all());
        // $request->validate([
        //     'name' => 'required|unique:foods',
        //     'count' => 'required|integer|min:0|max:1000',
        //     'category_id' => 'required',
        //     'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        // ]);

        // $generatedImageName = 'image' . time() . '-'
        //     . $request->name . '.'
        //     . $request->image->extension();

        // $request->image->move(public_path('images'), $generatedImageName);

        $request->validated();
        $food = Food::create([
            'name' => $request->input('name'),
            'count' => $request->input('count'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
            // 'image_path' => $generatedImageName,
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

    public function update(CreateValidationRequest $request, $id)
    {
        // $request->validated();
        $food = Food::where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'count' => $request->input('count'),
                'description' => $request->input('description')
            ]);
        dd($food);
        return redirect('/foods');
    }

    //DELETE
    public function destroy($id)
    {
        $food = Food::find($id);
        $food->delete();
        return redirect('/foods');
    }
}
