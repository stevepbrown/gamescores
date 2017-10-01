<table class="table table-striped table-bordered text-left">
  <caption>Title (including sort & filter status)</caption>
  <tr>
    <th>Position</th>
    <th>Name</th>
    <th>Difficulty</th>
    <th>Score</th>
  </tr>
  <tr>
    @foreach ($scores as $score)
      <td>{{$score->position}}</td>
      <td>{{$score->user->name}}</td>
      <td>{{$score->difficulty}}</td>
      <td>{{$score->max_score}}</td>
    @endforeach
  </tr>
</table>
