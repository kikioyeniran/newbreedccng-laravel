<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(3);
        return view('admin.blog.create')->with('blogs', $blogs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'author' => 'required',
            'summary' => 'required',
            'main_post' => 'required',
            'picture' => 'image|nullable|max:1999'
        ]);

        //Handle file up0loads
        if ($request->hasFile('picture')) {
            //Get file name with extension
            $filenameWithExt = $request->file('picture')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('picture')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            //Upload image
            $path = $request->file('picture')->storeAs('public/pictures', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        //Create Post
        $blog = new Blog;
        $blog->title = $request->input('title');
        $blog->author = $request->input('author');
        $blog->summary = $request->input('summary');
        $blog->main_post = $request->input('main_post');
        // $blog->user_id = auth()->user()->id;
        $blog->picture = $fileNameToStore;
        $blog->save();


        return redirect('/blog/create')->with('success', 'Post created');
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
        $blog = Blog::find($id);
        // check for correct user
        // if(auth()->user()->id !== $blog->user_id){
        //     return redirect('/posts')->with('error', 'unauthorised page');
        // }
        return view('admin.blog.edit')->with('post', $blog);
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
        $this->validate($request, [
            'title' => 'required',
            'author' => 'required',
            'summary' => 'required',
            'main_post' => 'required',
            'picture' => 'image|nullable|max:1999'
        ]);

        //Handle file up0loads
        if ($request->hasFile('picture')) {
            //Get file name with extension
            $filenameWithExt = $request->file('picture')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('picture')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            //Upload image
            $path = $request->file('picture')->storeAs('public/pictures', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        //Create Post
        $blog = Blog::find($id);
        $blog->title = $request->input('title');
        $blog->author = $request->input('author');
        $blog->summary = $request->input('summary');
        $blog->main_post = $request->input('main_post');
        if ($request->hasFile('picture')) {
            $blog->picture = $fileNameToStore;
        }
        $blog->save();

        return redirect('/blog/create')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        // check for correct user
        // if(auth()->user()->id !== $post->user_id){
        //     return redirect('/posts')->with('error', 'unauthorised page');
        // }
        if ($blog->picture != 'noImage.jpg') {
            // Delete image
            Storage::delete('public/pictures/' . $blog->picture);
        }
        $blog->delete();
        return redirect('/blog/create')->with('success', 'Post Updated');
    }
}
