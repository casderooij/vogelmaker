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
        $this->middleware('web');
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
      $bird->save();
      return 'Yes';
    }
}
