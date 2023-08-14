<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $this->authorize('create', Post::class);
    //Why we added this line?
    //If we did not add this line although the button/Link
    //encapsulated in the @can() will still be invisible but
    //the unathorize user if able to guess the related URL can
    //type the link and so can access the interface
    //and this is big security problem.

    //If you study Laravel Policy, you shall come to 
    //know that the authorize() is related to Policy.
    //The 'create' parameter is in fact the create() method
    //in PostPolicy.
    
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->authorize('create', Post::class);
        $validated = $request->validate(['title' => 'required', 'body' =>
        'required']);
        Post::create($validated);

        return to_route('posts.index');
    }
}
