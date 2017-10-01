<div id="filter-and-sort">

  {!! Form::open(['method' => 'POST', 'url' => '#', 'class' => 'form-horizontal']) !!}

  <fieldset id="fieldset-filters">
    <legend>Select filters you wish to apply</legend>
    <div id="div-select-filter"class="form-group">
      {!! Form::select('size', ['L' => 'Large', 'S' => 'Small'], 'S');!!}
    </div>
  </fieldset>
  <fieldset id="fieldset-filters">
    <legend>Select field you wish to sort by</legend>
    <div id="div-select-sort"class="form-group">
      {!! Form::select('size', ['L' => 'Large', 'S' => 'Small'], 'S');!!}
    </div>
  </fieldset>


  {!! Form::submit("Add", ['class' => 'btn']) !!}

  {!! Form::close() !!}
