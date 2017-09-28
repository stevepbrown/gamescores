@extends('layouts.default-layout')

@section('title')
 High Scores
@endsection
@section('login-control')
    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
@endsection

@section('filters')
<p>Some filters</p>
@endsection


@section('content')

  <h1 class="text-center">High Scores</h1>
<table>
    <tr>
    <td><h2>Name</h2></td>
    <td><h2>Difficulty</h2></td>
    <td><h2>Score</h2></td>
  </tr>

@foreach ($scores as $score)
<tr>
  <td>{{$score->user->name}}</td>
  <td>{{$score->difficulty}}</td>
  <td>{{$score->score}}</td>
</tr>
@endforeach
</table>
@endsection

@section('actions')
  <form method="POST" action="#" accept-charset="UTF-8" enctype="multipart/form-data">
     {{ csrf_field() }}
    <label for="player">Player name</label><input type="text" name="player"/></br>
    <label for="difficulty">Difficulty</label> <select id="difficulty" name="difficulty">
      <option value="Basic">Basic</option>
      <option value="Intermediate">Intermediate</option>
      <option value="Advanced">Advanced</option>

    </select> </br>
    <label for="score">Score</label><input type="number" name="score">
    <input type="submit" value="Add score">
  </form>

@endsection
