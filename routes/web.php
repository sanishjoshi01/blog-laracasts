<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

Route::get('/', function () {
    return view('posts', [
        'posts' => Post::all()
    ]);
});

Route::get('posts/{post}', function ($id) {
    return view('post', [
        'post' => Post::findOrFail($id)
    ]);
});
