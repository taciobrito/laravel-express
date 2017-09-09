<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index()
    {
    		$posts = Post::all();

    		return view( 'posts/index', compact('posts') );
    }

    public function post( $id = null ){
    	if ( !isset($id) ) {
    		return redirect('blog');
    	}

    	$post = Post::find($id);

    	return view( 'posts/post-interna', compact('post') );
    }
}
