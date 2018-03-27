<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;
use App\Skill;
use App\Testimonial;

class HomeController extends Controller
{
	public function index()
	{
		$items =  DB::table('menu_items')->where('menu_id','=','2')->get();
		$posts =  Post::where('status',"=",'PUBLISHED')->paginate(6);
		foreach ($posts as $key => $post) {
			$post->url = $this->urlGenerator($post->id);
		}
		$skills =  Skill::all();
		$testimonials =  Testimonial::all();
		return view('page.index',compact('items','posts','testimonials','skills'));
	}
	public function urlGenerator($id)
	{
		$post = Post::findOrFail($id);
		$slug = $post->slug;
		$categoty_string = $post->category->slug;
		$categoty_string = $this->categoryUrlBuilder($post->category, $categoty_string);
		return config('app.url') . '/blog/' . $categoty_string . "/" . $slug . "/" . $id; 
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
}
