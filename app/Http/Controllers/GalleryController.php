<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Gallery;

class GalleryController extends Controller
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
        $galleries = Gallery::orderBy('created_at', 'desc')->paginate(3);
        return view('admin.gallery.create')->with('galleries', $galleries);
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
            'picture' => 'required',
            'picture.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        //Handle file up0loads
        if ($request->hasFile('picture')) {
            //Get file name with extension
            if (is_array($request->file('picture'))) {
                foreach ($request->file('picture') as $image) {
                    $filenameWithExt = $image->getClientOriginalName();
                    // Get just filename
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    // Get just ext
                    $extension = $image->getClientOriginalExtension();
                    //Filename to store
                    $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                    //Upload image
                    $path = $image->storeAs('public/pictures', $fileNameToStore);

                    // $data[] = $fileNameToStore;
                    //Create Post
                    $gallery = new Gallery;
                    // $gallery->user_id = auth()->user()->id;
                    $gallery->picture = $fileNameToStore;
                    $gallery->save();
                }
                return redirect('/gallery/create')->with('success', 'Pictures uploaded');
            } else {
                $filenameWithExt = $request->file('picture')->getClientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('picture')->getClientOriginalExtension();
                //Filename to store
                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                //Upload image
                $path = $request->file('picture')->storeAs('public/pictures', $fileNameToStore);

                // $data[] = $fileNameToStore;
                //Create Post
                $gallery = new Gallery;
                // $gallery->user_id = auth()->user()->id;
                $gallery->picture = $fileNameToStore;
                $gallery->save();
                return redirect('/gallery/create')->with('success', 'Picture Uploaded');
            }
        } else {
            return redirect('/gallery/create')->with('fail', 'Post not created');
        }
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        // check for correct user
        // if(auth()->user()->id !== $post->user_id){
        //     return redirect('/posts')->with('error', 'undateised page');
        // }
        if ($gallery->picture != 'noImage.jpg') {
            // Delete image
            Storage::delete('public/pictures/' . $gallery->picture);
        }
        $gallery->delete();
        return redirect('/gallery/create')->with('success', 'Post Updated');
    }
}
