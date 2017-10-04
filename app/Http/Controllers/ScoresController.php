<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScoresController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  */

  public function index()

  {

    return view('pages.index');

  }


  public function processScoresRequest(Request $request){

    $data = $request->all(); // This will get all the request data.

    dd($data);
  }
}
