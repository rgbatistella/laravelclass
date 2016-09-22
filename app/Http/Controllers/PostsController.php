<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class PostsController extends Controller
{
    private $post;

    public function __construct(Post $post) {
        $this->post = $post;
    }

    public function index()
    {
/*        $myposts = [ ['title'=>'Man must explore, and this is exploration at its greatest', 'content'=>'Problems look mighty small from 150 miles up', 'comment'=>'Posted by Start Bootstrap on September 24, 2014']
                   , ['title'=>"I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.", 'content'=>'', 'comment'=>'Posted by Start Bootstrap on September 18, 2014']
                   , ['title'=>"Science has not yet mastered prophecy", 'content'=>'We predict too much for the next year and yet far too little for the next ten.', 'comment'=>'Posted by Start Bootstrap on August 24, 2014']
                   , ['title'=>"Failure is not an option", 'content'=>'Many say exploration is part of our destiny, but it’s actually our duty to future generations.', 'comment'=>'Posted by Start Bootstrap on July 8, 2014']
                   ];
*/
        $posts = $this->post->paginate(5);
        return view('posts.index', compact('posts'));
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->post->create($request->all());
        return redirect(route('posts.index'));
    }

    public function edit($post_id)
    {
        $post = $this->post->find($post_id);
        return view('posts.edit')->with('posts',$post);
    }

    public function update($post_id, Request $request)
    {
        $post = $this->post->find($post_id);
        $post->update($request->all());
        return redirect(route('posts.index'));
    }

}
