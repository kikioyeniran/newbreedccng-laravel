<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Event;
use App\Background;
use App\Blog;

class EventsController extends Controller
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
        $background = Background::where('page', 'events')->get();
        $latest = Event::orderBy('id', 'desc')->take(1)->get();
        $blog = Blog::orderBy('id', 'desc')->take(4)->get();
        $events = Event::orderBy('created_at', 'desc')->paginate(6);
        return view('admin.events.index')->with('events', $events)->with('blog', $blog)->with('latest', $latest)->with('background', $background);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $events = Event::orderBy('created_at', 'desc')->paginate(3);
        return view('admin.events.create')->with('events', $events);
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
            'theme' => 'required',
            'date' => 'required',
            'location' => 'required',
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
        $event = new Event;
        $event->theme = $request->input('theme');
        $event->dt = $request->input('date');
        $event->location = $request->input('location');
        // $event->user_id = auth()->user()->id;
        $event->picture = $fileNameToStore;
        $event->save();


        return redirect('/events/create')->with('success', 'Post created');
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
        $event = Event::find($id);
        // check for correct user
        // if(auth()->user()->id !== $blog->user_id){
        //     return redirect('/posts')->with('error', 'unauthorised page');
        // }
        return view('admin.events.edit')->with('event', $event);
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
            'theme' => 'required',
            'date' => 'required',
            'location' => 'required',
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
        $event = Event::find($id);
        $event->theme = $request->input('theme');
        $event->dt = $request->input('date');
        $event->location = $request->input('location');
        // $event->user_id = auth()->user()->id;s
        if ($request->hasFile('picture')) {
            $event->picture = $fileNameToStore;
        }
        $event->save();

        return redirect('/events/create')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        // check for correct user
        // if(auth()->user()->id !== $post->user_id){
        //     return redirect('/posts')->with('error', 'undateised page');
        // }
        if ($event->picture != 'noImage.jpg') {
            // Delete image
            Storage::delete('public/pictures/' . $event->picture);
        }
        $event->delete();
        return redirect('/events/create')->with('success', 'Post Deleted');
    }
}
