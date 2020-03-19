<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Sermon;
use App\Background;

class SermonsController extends Controller
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
        $background = Background::where('page', 'sermons')->get();
        $latest = Sermon::orderBy('id', 'desc')->take(1)->get();
        $sermons = Sermon::orderBy('created_at', 'desc')->paginate(6);
        return view('admin.sermons.index')->with('sermons', $sermons)->with('latest', $latest)->with('background', $background);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sermons = Sermon::orderBy('created_at', 'desc')->paginate(3);
        return view('admin.sermons.create')->with('sermons', $sermons);
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
            'preacher' => 'required',
            'summary' => 'required',
            'picture' => 'image|nullable|max:2999',
            'audio' => 'nullable|file|mimes:audio/mpeg,mpga,mp3,wav,aac'
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

        //Handle audio up0loads
        if ($request->hasFile('audio')) {
            //Get file name with extension
            $filenameWithExt = $request->file('audio')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('audio')->getClientOriginalExtension();
            //Filename to store
            $audioFileNameToStore = $filename . '_' . time() . '.' . $extension;
            //Upload image
            $path = $request->file('audio')->storeAs('public/audios', $audioFileNameToStore);
        } else {
            $audioFileNameToStore = 'noaudio.mp3';
        }

        //Create Post
        $sermon = new sermon;
        $sermon->title = $request->input('title');
        $sermon->preacher = $request->input('preacher');
        $sermon->summary = $request->input('summary');
        // $sermon->user_id = auth()->user()->id;
        $sermon->picture = $fileNameToStore;
        $sermon->audio = $audioFileNameToStore;
        $sermon->save();


        return redirect('/sermons/create')->with('success', 'Post created');
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
        $sermon = Sermon::find($id);
        // check for correct user
        // if(auth()->user()->id !== $sermon->user_id){
        //     return redirect('/posts')->with('error', 'unauthorised page');
        // }
        return view('admin.sermon.edit')->with('post', $sermon);
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
            'preacher' => 'required',
            'summary' => 'required',
            'picture' => 'image|nullable|max:2999',
            'audio' => 'nullable|file|mimes:audio/mpeg,mpga,mp3,wav,aac'
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

        //Handle audio up0loads
        if ($request->hasFile('audio')) {
            //Get file name with extension
            $filenameWithExt = $request->file('audio')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('audio')->getClientOriginalExtension();
            //Filename to store
            $audioFileNameToStore = $filename . '_' . time() . '.' . $extension;
            //Upload image
            $path = $request->file('audio')->storeAs('public/audios', $audioFileNameToStore);
        } else {
            $audioFileNameToStore = 'noaudio.mp3';
        }

        //Create Post
        $sermon = Sermon::find($id);
        $sermon->title = $request->input('title');
        $sermon->preacher = $request->input('preacher');
        $sermon->summary = $request->input('summary');
        if ($request->hasFile('picture')) {
            $sermon->picture = $fileNameToStore;
        }
        if ($request->hasFile('audio')) {
            $sermon->audio = $audioFileNameToStore;
        }
        $sermon->save();
        return redirect('/sermons/create')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sermon = Sermon::find($id);
        // check for correct user
        // if(auth()->user()->id !== $post->user_id){
        //     return redirect('/posts')->with('error', 'unauthorised page');
        // }
        if ($sermon->picture != 'noImage.jpg') {
            // Delete image
            Storage::delete('public/pictures/' . $sermon->picture);
            Storage::delete('public/audios/' . $sermon->audio);
        }
        $sermon->delete();
        return redirect('/sermon/create')->with('success', 'Post Deleted');
    }
}
