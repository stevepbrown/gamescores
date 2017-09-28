@extends('layouts.default-layout')

@section('title')
 High Scores
@endsection
@section('login-control')
    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
@endsection

@section('filters')
{{-- @include('components.filters.scoreFilter') --}}

<p>Area to hold filters (under construction)</p>

@endsection


@section('content')

  <h1 class="text-center">High Scores</h1>
<table class="table table-striped table-bordered text-left">
    <tr>
    <th>Position</th>
    <th>Name</th>
    <th>Difficulty</th>
    <th>Score</th>
  </tr>

@foreach ($scores as $score)
<tr>
  <th></th>
  <th>{{$score->user->name}}</th>
  <th>{{$score->difficulty}}</th>
  <th>{{$score->score}}</th>
</span>
</tr>
@endforeach
</table>
@endsection

@section('actions')
  @include('components.actions.formAddScore')


  {{-- <form method="POST" action="#" accept-charset="UTF-8" enctype="multipart/form-data">
     {{ csrf_field() }}
    <label for="player">Player name</label><input type="text" name="player"/></br>
    <label for="difficulty">Difficulty</label> <select id="difficulty" name="difficulty">
      <option value="Basic">Basic</option>
      <option value="Intermediate">Intermediate</option>
      <option value="Advanced">Advanced</option>

    </select> </br>
    <label for="score">Score</label><input type="number" name="score">
    <input type="submit" value="Add score">
  </form> --}}



@endsection
