<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Blog::get();
        return view('dashboard.blog.view',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image',
        ]);

        $user = Auth::User();
        $image = $request->file('image');
        $filename = time().'.'.$image->extension();
        $destinationPath = public_path('/post_images');
        $image->move($destinationPath, $filename);

        $slug = Str::slug($request['title']);
        $post = Blog::create([
            'user_id' => $user->id,
            'title' => $request['title'],
            'description' => $request['description'],
            'image' => $filename,
            'slug' => $slug,
        ]);
        return redirect()->back()->with('flash_message_success','Post added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Blog::findorfail($id);
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'status' => 'required',
            'image' => 'image',
        ]);

        $user = Auth::User();
        if(!empty($request['image'])){
            $image = $request->file('image');
            $filename = time().'.'.$image->extension();
            $destinationPath = public_path('/post_images');
            $image->move($destinationPath, $filename);

            unlink($destinationPath.'/'.$post->image);
        }
        else{
            $filename = $post->image ;
        }
        $slug = Str::slug($request['title']);
        $post->title = $request['title'];
        $post->description = $request['description'];
        $post->image = $filename;
        $post->slug = $slug;
        $post->status = $request['status'];
        $post->save();
        return redirect()->back()->with('flash_message_success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Blog::findorfail($id);
        $post->delete();
        return redirect()->back()->with('flash_message_success','Post deleted successfully');
    }
}
