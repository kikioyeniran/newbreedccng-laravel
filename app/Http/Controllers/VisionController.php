<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Vision;

class VisionController extends Controller
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $vision = vision::find($id);
        return view('admin.vision.edit')->with('post', $vision);
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
            'vision' => 'image|nullable|max:1999',
            'mission' => 'image|nullable|max:1999'
        ]);

        //Handle file up0loads
        if ($request->hasFile('vision')) {
            //Get file name with extension
            $filenameWithExt = $request->file('vision')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('vision')->getClientOriginalExtension();
            //Filename to store
            $visionfileNameToStore = $filename . '_' . time() . '.' . $extension;
            //Upload image
            $path = $request->file('vision')->storeAs('public/pictures', $visionfileNameToStore);
        } else {
            $visionfileNameToStore = 'noimage.jpg';
        }
        if ($request->hasFile('mission')) {
            //Get file name with extension
            $filenameWithExt = $request->file('mission')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('mission')->getClientOriginalExtension();
            //Filename to store
            $missionfileNameToStore = $filename . '_' . time() . '.' . $extension;
            //Upload image
            $path = $request->file('mission')->storeAs('public/pictures', $missionfileNameToStore);
        } else {
            $missionfileNameToStore = 'noimage.jpg';
        }

        //Create Post
        $vision = Vision::find($id);
        if ($request->hasFile('vision')) {
            $vision->vision = $visionfileNameToStore;
        }
        if ($request->hasFile('mission')) {
            $vision->mission = $missionfileNameToStore;
        }
        $vision->save();

        return redirect('/vision/1/edit')->with('success', 'Post Updated'); //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
