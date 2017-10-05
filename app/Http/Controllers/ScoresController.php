<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\models;


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

//TODO - Remove this example $users = App\User::where('active', 1)->get();
  //  $scores = models\Score::where('Score->user->name', $data['filterSelection'])->get();
$scores = models\Score::with('user')->get();

dd($score);


// TODO dd($scores->user()->where('name', 'Estevan Johns')->get());


    // switch($data->filterType){
    //
    //   case 'name':
    //   $scores = Score::where('score->user->name', $filterSelection)->get();
    //   case 'difficulty':
    //     $scores = Score::where('score->difficulty', $filterSelection)->get();
    //     default:
    //     $scores = Score::all()-get();
    //
    //   }

      return $scores;
    }
    //TODO Remove this $scores = App\Score::where('active', 1)->get();
  }
