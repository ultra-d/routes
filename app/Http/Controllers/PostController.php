<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Requests\StorePostRequest;
use Illuminate\Http\Requests\UpdatePostRequest;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all(['id', 'title', 'content']);
        return view('welcome', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }
}
