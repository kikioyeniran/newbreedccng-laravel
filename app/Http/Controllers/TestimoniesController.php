<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Testimony;

class TestimoniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function create()
    {
        $testimonies = Testimony::orderBy('created_at', 'desc')->paginate(3);
        return view('admin.testimonies.create')->with('testimonies', $testimonies);
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
            'testifier' => 'required',
            'testimony' => 'required',
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
        $testimony = new Testimony;
        $testimony->testifier = $request->input('testifier');
        $testimony->testimony = $request->input('testimony');
        // $testimony->user_id = auth()->user()->id;
        $testimony->picture = $fileNameToStore;
        $testimony->save();


        return redirect('/testimony/create')->with('success', 'Post created');
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
        $testimony = Testimony::find($id);
        // check for correct user
        // if(auth()->user()->id !== $blog->user_id){
        //     return redirect('/posts')->with('error', 'unauthorised page');
        // }
        return view('admin.testimonies.edit')->with('testimony', $testimony);
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
            'testifier' => 'required',
            'testimony' => 'required',
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
        $testimony = Testimony::find($id);
        $testimony->testifier = $request->input('testifier');
        $testimony->testimony = $request->input('testimony');
        // $testimony->user_id = auth()->user()->id;
        if ($request->hasFile('picture')) {
            $testimony->picture = $fileNameToStore;
        }
        $testimony->save();

        return redirect('/testimony/create')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimony = Testimony::find($id);
        // check for correct user
        // if(auth()->user()->id !== $post->user_id){
        //     return redirect('/posts')->with('error', 'undateised page');
        // }
        if ($testimony->picture != 'noImage.jpg') {
            // Delete image
            Storage::delete('public/pictures/' . $testimony->picture);
        }
        $testimony->delete();
        return redirect('/testimony/create')->with('success', 'Post Deleted');
    }
}
