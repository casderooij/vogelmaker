<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bird;

class CmsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $birds = Bird::all();

      return view('cms.home')->with('birds', $birds);
    }

    // Store a new bird
    public function store(Request $request) {
      $bird = new Bird;
      $bird->eng_name = $request->eng_name;
      $bird->lat_name = $request->lat_name;
      $bird->location = $request->location;
      $bird->diet = $request->diet;
      $bird->head_img = $request->file('head_img')->store('images/'.strtolower($bird->eng_name));
      $bird->body_img = $request->file('body_img')->store('images/'.strtolower($bird->eng_name));
      $bird->legs_img = $request->file('legs_img')->store('images/'.strtolower($bird->eng_name));
      $bird->wing_img = $request->file('wing_img')->store('images/'.strtolower($bird->eng_name));
      $bird->save();
      return redirect('/home');
      // return $bird;
    }
}
