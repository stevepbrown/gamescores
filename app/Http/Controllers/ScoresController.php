<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class ScoresController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {

    $scores = \App\models\Score::with('user')->get();

    return view('pages.index',array('scores'=>$scores));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return view
  */
  public function create()
  {

/*
 TODO Currently throwing a SQL error, need to debug!

 */

// Save the username
$user = new new \App\models\User;



    $scores = \App\models\Score::with('user')->get();


$users = \App\models\User::all();

    $user = new \App\models\User;
    $score = new \App\models\Score;

    $user->name= $_REQUEST['player'];

    // Save the player's name


        // Obtain ID of new user

$sorted_users = $users->sortByDesc('id');

    $top_user = $sorted_users->take(1);


    $id=  $top_user->pluck('id');

    $score->score = $_REQUEST['score'];
    $score->difficulty = $_REQUEST['difficulty'];
    $score->user_id=  $id;
    $score->moderated= false;
    $score->save();


    return view('pages.index',array('scores'=>$scores));


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
  * @param  \App\Score  $score
  * @return \Illuminate\Http\Response
  */
  public function show(Score $score)
  {
    //
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\Score  $score
  * @return \Illuminate\Http\Response
  */
  public function edit(Score $score)
  {
    //
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\Score  $score
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, Score $score)
  {
    //
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Score  $score
  * @return \Illuminate\Http\Response
  */
  public function destroy(Score $score)
  {
    //
  }
}
