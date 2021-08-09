<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index(){
        $posts = Post::where('status', 2)->latest('id')->paginate(9);
        $categories = Category::all();
        return view('blog.index', compact('posts','categories'));


    }

    public function show(Post $post ){
        $this->authorize('published', $post);
         $similares = Post::where('category_id', $post->category_id)
                                    ->where('status',2)
                                    ->where('id', '!=',$post->id)
                                    ->latest('id')
                                    ->take(5)
                                    ->get();

        $title = Str::limit($post->name, 30, '...');

        return view('blog.show', compact('post','similares','title')); 

    }

    public function category(Category $category){
        
        $posts = Post::where ('category_id', $category->id)
                        ->where('status',2)
                        ->latest('id')
                        ->paginate(6);
        
       return view('blog.category', compact('posts','category'));
 
    }

    public function tag(Tag $tag){
        $posts = $tag->posts()->where('status', 2)->latest('id')->paginate(3);
        return view('blog.tag', compact('posts','tag'));
    }
}
