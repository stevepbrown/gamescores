<table class="table table-striped table-bordered text-left">
  <caption>Title (including sort & filter status)</caption>
  <tr>
    <th>Name</th>
    <th>Difficulty</th>
    <th>Score</th>
  </tr>
@foreach ($scores as $score)
  <tr>
      <td>{{$score->user->name}}</td>
      <td>{{$score->difficulty}}</td>
      <td>{{$score->max_score}}</td>
  </tr>
  @endforeach
</table>
