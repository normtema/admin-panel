<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class ArticlesController extends Controller
{

    public function index(Request $request)
    {



        $posts = Post::get();

        for($i = 0; $i < sizeof($posts); ++$i) {
            if ($posts[$i]->alias_of !=0) {
                $posts[$i]->title= $posts[$posts[$i]->alias_of-1]->title;
                $posts[$i]->text= $posts[$posts[$i]->alias_of-1]->text;
                $posts[$i]->created_at= $posts[$posts[$i]->alias_of-1]->created_at;

            }

        }

        if ($request->has('sorting')) {
            $posts = Post::orderBy($request->sorting, 'ASC')->get();
        }







        return view('articles', [
            'posts' => $posts
        ]
        );
    }
}
