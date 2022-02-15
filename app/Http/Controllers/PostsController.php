<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\Facades\DB;

class PostsController extends Controller
{
    public function show($slug)
    {
        $post = DB::table('posts')->where('slug', $slug)->first();

        return view('post', [
            'post' => Post::where('slug', $slug)->firstOrFail()
        ]);
    }

    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
           $table->id();
           $table->string('slug');
           $table->string('title');
           $table->text('body');
           $table->timestamps();
           $table->timestamp('published_at')->nullable();
        });
    }
}
