<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Handles Posts
     * @return void
     * 
     */
    public function __construct()
    {
        
    }

    public function createPost(Request $request) {
        $post = Post::create($request->all());

        return response()->json($post);
    }

    public function updatePost(Request $request, $id) {

    }

}