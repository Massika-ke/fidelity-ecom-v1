<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $posts = DB::delete("DELETE FROM posts where id = ?", [53]);
        // $posts = Post::where("min_to_read", 2)->get();
        
        return view("blog.index", [
            'posts' => Post::orderBy("updated_at", "desc")->get()
        ]);
    } 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("blog.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // using php oop...
        // $post = new Post();
        // $post->title = $request->title;
        // $post->excerpt = $request->excerpt;
        // $post->body = $request->body;
        // $post->image_path = 'temporary';
        // $post->is_published = $request->is_published === 'on';
        // $post->min_to_read = $request->min_to_read;
        // $post->save();


        // using eloquent
        Post::created([
                'title' => $request->title,
                'excerpt' => $request->excerpt,
                'body' => $request->body,
                'image_path' => 'temporary',
                'is_published' => $request->is_published === 'on',
                'min_to_read' => $request->min_to_read
        ]);

        return redirect(route('blog.index'));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('blog.show', [
            'post' => Post::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
