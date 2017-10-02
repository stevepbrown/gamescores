<div id="filter-and-sort">
  <form class="form-horizontal" action="#" method="get">
    {{ csrf_field() }}
    <h2>Apply Sort &amp; Filter</h2>
    <div class="form-group" id="ENTER_ID">
      <label for="select-filter"><strong>Filter</strong> by: </label>
      <select id="select-filter" type="select">
        <option value="none">None</option>
        <option value="name">Name</option>
        <option value="difficulty">Difficulty</option>
      </select>
      <select id="select-filter-difficulty" class="hidden">
        <option value="">Not Selected</option>
        <option value="easy">Easy</option>
        <option value="medium">Medium</option>
        <option value="advanced">Advanced</option>
      </select>
      <select id="select-filter-name" class="hidden">
        <option value="">Not Selected</option>
        <option value='Aida Champlin'>Aida Champlin</option>
        <option value='Brant Lynch'>Brant Lynch</option>
        <option value='Camryn Franecki'>Camryn Franecki</option>
      </select>

    </div>
    <div class="form-group">
      <label for="select-sort"><strong>Sort</strong> by: </label>
      <select type="select" id="select-sort">
        <option value="none">None</option>
        <option value="name">Name</option>
        <option value="difficulty">Difficulty</option>
        <option value="score">Score</option>
      </select>
    </div>
    <div class="form-group text-center">
      <button type="submit" class="btn btn-default">Apply</button>
    </div>
</form>
</div>
