@extends('layouts.default-layout')

@section('title')
  High Scores
@endsection
@section('login-control')
  <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
@endsection
@section('filters')
  <div id="filters" class="col-sm-2">
    @include('components.forms.formFilterScore')
    {{-- TODO - Remove when ready <p class="alert alert-warning">Calls a component which renders an action [addScore] form, <strong>UNDER CONSTRUCTION</strong></p> --}}
  </div>
@endsection
@section('content')
  <div id="content" class="col-sm-8">
    <p class="alert alert-danger text-center"><strong>Error:</strong> AJAX call failed!</p>
  </div>
@endsection
@section('actions')
  <div id="actions" class="col-sm-2">
    <p class="alert alert-warning">Calls a component which renders an action [addScore] form, <strong>UNDER CONSTRUCTION</strong></p>
  </div>
@endsection


{{-- //TODO content will be rendered programatically --}}
{{-- @section('content')
<
@endsection --}}
