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


  public function processScoresRequest(Request $request)
  {
    $data = $request->all(); // This will get all the request data.

    // get all the scores
    $scores = models\Score::with('user')->get();

    // determine filter type & apply the filter
    if ($data->filterType === 'none'){

      //no filter
      $filteredScores = $scores}

      else {// filter according to the filter type / selected filter

        switch ($data->filterType) {
          case 'difficulty':
            $filteredScores = $scores->where('difficulty', $data->filterSelection);
            break;

            case 'name':
            $filteredScores = $scores->where('scores->user->name', $data->filterSelection);
            break;
          }
        }

      }




      return view('components.AJAX.scoretable')->with(['scores' => $scores]);
    }
  }
