<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function index()
    {
        $posts=Post::all();
        return view('home',[
            "posts"=>$posts
        ]);
    }
    public function show()
    {
        $categories=Category::all();
        $posts=Post::all();
        return view("admin.post.index",[
            "posts"=>$posts,
            "categories"=>$categories
        ]);
    }
    public function add()
    {
        $categories=Category::all();
        return view("admin.post.add",[
            "categories"=>$categories
        ]);
    }
    public function create(StorePostRequest $request)
    {
/*        $validation=$request->validate([
            "title"=>"required|min:3",
            "body"=>"required",
            "category_id"=>"required|integer"
        ],[
            "title.required"=>"title is not valid"
        ]);*/


/*        Validator::make(request()->all(),[
            "title"=>"required|min:3",
            "body"=>"required",
            "category_id"=>"required|integer"
        ],[
            "title.required"=>"title is not valid"
        ])->validated();*/


        $title=$request->title;
        $body=$request->body;
        $category_id=$request->category_id;

        Post::create([
            "title"=>$title,
            "body"=>$body,
            "category_id"=>$category_id
        ]);
        return redirect("/admin/post");
    }

    public function delete($id)
    {
        $post=Post::find($id);
        $post->delete();
        return redirect("/admin/post");

    }
    public function update($id)
    {
        $categories=Category::all();
        $post=Post::find($id);
        return view("admin.post.update",[
            "post"=>$post,
            "categories"=>$categories
        ]);
    }

    public function edit(Request $request,$id)
    {
        $validation=$request->validate([
            "title"=>"required|min:3",
            "body"=>"required",
            "category_id"=>"required|integer"
        ]);
        $post=Post::find($id);
        $title=request("title");
        $body=request("body");
        $category_id=request("category_id");

        $post->update([
            "title"=>$title,
            "body"=>$body,
            "category_id"=>$category_id
        ]);
        return redirect("/admin/post");

    }
}
