<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bird;

class ApiController extends Controller
{
    public function allBirds() {
      $birds = Bird::all();
      foreach($birds as $bird) {
        return response()->json($bird->eng_name);
      }
    }
}
