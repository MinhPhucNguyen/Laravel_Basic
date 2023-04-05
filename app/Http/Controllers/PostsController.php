<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index(){
        // $posts = DB::select("SELECT * FROM posts WHERE id = :id", [ 'id'=>3]);

        $posts = DB::table("posts")
            ->where('id', '=', 7)
            // ->update([
            //     'title' => 'haha title',
            //     'body' => 'abc'
            // ]);
            ->delete();
            // ->select('*')
            // ->find(3);
            // ->min('id');
            // ->sum('id');
            // ->avg('id');
            // ->insert([
            //     'title' => 'haha',
            //     'body' => 'A new post',
            // ]);
            // ->count();
            // ->oldest()
            // ->latest()
            // ->orderBy('id','desc')
            // ->whereNotNull('body')
            // ->whereBetween('id', [1, 3])
            // ->where('created_at', '>', now()->subDay())
            // ->orWhere('id', '>', 1)
            // ->first();
            // ->get();
        dd($posts);
        // return view('posts.index');
    }
}
