<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;

class BlogController extends Controller
{
	public function index(){
		return view('page.blog',compact('post'));
	}
	public function show($slug_category,$slug,$id)
	{
		$post = Post::findOrFail($id);
		$obj = $post->category;

		$slugPost = $post->slug;
		if ($slugPost != $slug) {
			return redirect()->route('home');
		}
		if ($obj) {
			$categoty_string = $obj->slug;
		}
		$categoty_string = $this->categoryUrlBuilder($obj, $categoty_string);
		if ($slug_category != $categoty_string) {
			return redirect()->route('home');
		}

		$post->url = $this->urlGenerator($id);
		return view('page.blog',compact('post'));
	}
	public function categoryUrlBuilder($obj,$categoty_string)
	{
		if ($obj->parentId){
			$categoty_string = $obj->parentId->slug . "-" . $categoty_string;
			return $this->categoryUrlBuilder($obj->parentId,$categoty_string);
		}else{
			return $categoty_string;
		}
	}
	public function urlGenerator($id)
	{
		$post = Post::findOrFail($id);
		$slug = $post->slug;
		$categoty_string = $post->category->slug;
		$categoty_string = $this->categoryUrlBuilder($post->category, $categoty_string);
		return config('app.url') . "/" . $categoty_string . "/" . $slug; 
	}
}
