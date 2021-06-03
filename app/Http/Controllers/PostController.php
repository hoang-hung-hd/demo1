<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.list', ['posts' => $posts]);
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'title'       => 'required|max:255',
            'description' => 'required',
          ]);
  
          $post = Post::updateOrCreate(['id' => $request->id], [
                    'title' => $request->title,
                    'description' => $request->description
                  ]);
  
          return response()->json(['code'=>200, 'message'=>'Post Created successfully','data' => $post], 200);
    }

    public function show($id)
    {
        $post = Post::find($id);

        return response()->json($post);
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return response()->json($post);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $post = Post::find($id)->delete();

      return response()->json(['success'=>'Post Deleted successfully']);
    }
    
}
