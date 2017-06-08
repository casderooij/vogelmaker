<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bird;

class ApiController extends Controller
{
    public function allBirds() {
      $birds = Bird::all();
      return $birds;
    }
}
