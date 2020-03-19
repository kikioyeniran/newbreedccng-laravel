<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Background;
use App\Blog;
use App\Ebook;
use App\Event;
use App\Gallery;
use App\Landingpg;
use App\Sermon;
use App\Testimony;
use App\vision;
use App\LeadSteward;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $background = Background::where('page', 'testimony')->get();
        $blog = Blog::orderBy('id', 'desc')->take(3)->get();
        $ebooks = Ebook::orderBy('id', 'desc')->take(1)->get();
        $events = Event::orderBy('id', 'desc')->take(2)->get();
        $gallery = Gallery::orderBy('id', 'desc')->get();
        // $landingpg = Landingpg::orderBy('id', 'desc')->get();
        $landingpg = Landingpg::all();
        // $landingpg = Landingpg::orderBy('id', 'desc')->take(1)->get();
        $sermons = Sermon::orderBy('id', 'desc')->take(1)->get();
        $testimony = Testimony::orderBy('id', 'desc')->get();
        $vision = vision::orderBy('id', 'desc')->get();

        $data = array($background, $blog, $ebooks, $events, $gallery, $landingpg, $sermons, $testimony, $vision);
        return view('pages.index')->with('background', $background)->with('blog', $blog)->with('ebooks', $ebooks)->with('events', $events)->with('gallery', $gallery)->with('landingpg', $landingpg)->with('sermons', $sermons)->with('testimonies', $testimony)->with('vision', $vision);
    }
    public function about()
    {
        $bgTest = Background::where('page', 'testimony')->get();
        $bgAbt = Background::where('page', 'about')->get();
        $gallery = Gallery::orderBy('id', 'desc')->get();
        $leadsteward = LeadSteward::all();
        $testimony = Testimony::orderBy('id', 'desc')->get();
        return view('pages.about')->with('bgTest', $bgTest)->with('bgAbt', $bgAbt)->with('gallery', $gallery)->with('leadsteward', $leadsteward)->with('testimony', $testimony);
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
        //
    }
}
