<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Ebook;
use App\Background;
use App\Blog;

class EbooksController extends Controller
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
        $background = Background::where('page', 'ebooks')->get();
        $latest = Ebook::orderBy('id', 'desc')->take(1)->get();
        $blog = Blog::orderBy('id', 'desc')->take(4)->get();
        $ebooks = Ebook::orderBy('created_at', 'desc')->paginate(6);
        return view('admin.ebooks.index')->with('ebooks', $ebooks)->with('blog', $blog)->with('latest', $latest)->with('background', $background);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ebooks = Ebook::orderBy('created_at', 'desc')->paginate(3);
        return view('admin.ebooks.create')->with('ebooks', $ebooks);
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
            'picture' => 'image|nullable|max:2999',
            'ebook' => 'nullable|file|max:4999'
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

        //Handle ebook up0loads
        if ($request->hasFile('ebook')) {
            //Get file name with extension
            $filenameWithExt = $request->file('ebook')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('ebook')->getClientOriginalExtension();
            //Filename to store
            $ebookFileNameToStore = $filename . '_' . time() . '.' . $extension;
            //Upload image
            $path = $request->file('ebook')->storeAs('public/ebooks', $ebookFileNameToStore);
        } else {
            $ebookFileNameToStore = 'noebook.mp3';
        }

        //Create Post
        $ebook = new Ebook;
        $ebook->title = $request->input('title');
        $ebook->author = $request->input('author');
        $ebook->summary = $request->input('summary');
        // $ebook->user_id = auth()->user()->id;
        $ebook->picture = $fileNameToStore;
        $ebook->document = $ebookFileNameToStore;
        $ebook->save();


        return redirect('/ebooks/create')->with('success', 'Post created');
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
        $ebook = Ebook::find($id);
        // check for correct user
        // if(auth()->user()->id !== $ebook->user_id){
        //     return redirect('/posts')->with('error', 'unauthorised page');
        // }
        return view('admin.ebooks.edit')->with('post', $ebook);
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
            'picture' => 'image|nullable|max:2999',
            'ebook' => 'nullable|file|mimes:ebook/mpeg,mpga,mp3,wav,aac'
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

        //Handle ebook up0loads
        if ($request->hasFile('ebook')) {
            //Get file name with extension
            $filenameWithExt = $request->file('ebook')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('ebook')->getClientOriginalExtension();
            //Filename to store
            $ebookFileNameToStore = $filename . '_' . time() . '.' . $extension;
            //Upload image
            $path = $request->file('ebook')->storeAs('public/ebooks', $ebookFileNameToStore);
        } else {
            $ebookFileNameToStore = 'noebook.mp3';
        }

        //Create Post
        $ebook = Ebook::find($id);
        $ebook->title = $request->input('title');
        $ebook->author = $request->input('author');
        $ebook->summary = $request->input('summary');
        if ($request->hasFile('picture')) {
            $ebook->picture = $fileNameToStore;
        }
        if ($request->hasFile('ebook')) {
            $ebook->document = $ebookFileNameToStore;
        }
        $ebook->save();
        return redirect('/ebooks/create')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ebook = Ebook::find($id);
        // check for correct user
        // if(auth()->user()->id !== $post->user_id){
        //     return redirect('/posts')->with('error', 'unauthorised page');
        // }
        if ($ebook->picture != 'noImage.jpg') {
            // Delete image
            Storage::delete('public/pictures/' . $ebook->picture);
            Storage::delete('public/ebooks/' . $ebook->document);
        }
        $ebook->delete();
        return redirect('/ebook/create')->with('success', 'Post Deleted');
    }
}
