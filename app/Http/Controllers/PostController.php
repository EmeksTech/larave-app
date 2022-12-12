<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = Post::all();
        $posts = auth()->user()->posts()->paginate();
        return view('posts.index',['posts' => $posts,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
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
            'title' => ['required', 'unique:posts', 'min:5'],
            'body' => ['required', 'string', 'min:30'],
            // 'image' => ['required', 'image', 'mimes:png,jpg,jpeg']
            'image' => "required|image|mimes:png,jpg,jpeg"
        ]);

        $data = $request->only('title','body');
        $slug = Str::slug($request->input('title'));

        // $image_dir =

        // dd($image_dir);

        Post::create(
            array_merge($data, [
                'slug' => $slug,
                'user_id' => auth()->user()->id,
                'image' => $request->file('image')->store('blog_images', 'public')
            ])
        );

        // $post = new Post();
        // $post->slug = Str::slug($request->input('title'));
        // $post->title = $request->input('title');
        // $post->body = $request->input('body');
        // $post->image = 'default.jpg';
        // $post->save();


        session()->flash('success', 'Post created successfully');
        return redirect()->route('posts.index');


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
        $post = Post::find($id);
        return view('posts.edit',['post' => $post]);

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

        $request->validate([
            'title' => ['required', 'unique:posts', 'min:5'],
            'body' => ['required', 'string', 'min:30'],
            // 'image' => ['required', 'image', 'mimes:png,jpg,jpeg']
            'image' => "nullable|image|mimes:png,jpg,jpeg"
        ]);

        $post = Post::findOrFail($id);
        $post->update($request->only('title', 'body'));

        // $post->title = $request->input('title');
        // $post->body = $request->input('body');
        // $post->save();
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        //TODO: after implementing file uplaod, we need to delete the file too

        return redirect()->route('posts.index');
    }
}
