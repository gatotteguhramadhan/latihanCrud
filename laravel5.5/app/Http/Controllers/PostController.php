<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostController extends Controller
{
	public function index()
	{
		$posts = Post::all();

		return view('post.index', compact('posts'));
	}
    public function create()
    {
    	$categories = Category::all();
    	return view('post.create', compact('categories'));
    }

    public function store()
    {
    	post::create([
    		'title' => Request('title'),
    		'slug' => str_slug(Request('title')),
    		'content' => Request('content'),
    		'category_id' => Request('category_id')
    	]);

    	return redirect()->route('post.index')->with('success', 'Post Ditambahkan');
    }

    public function show(Post $post)
    {
    	return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
    	$categories = Category::all();

    	return view('post.edit', compact('post','categories'));
    }

    public function update(Post $post)
    {
     	$post->update([
    		'title' => request('title'),
    		'category_id' => request('category_id'),
    		'content' => request('content')
    	]);

    	return redirect()->route('post.index')->with('info', 'Post berhasil di edit');
    }

	public function destroy(Post $post)
	{
		$post->delete();

		return redirect()->route('post.index')->with('danger','Post berhasil Dihapus');
	}     
}
