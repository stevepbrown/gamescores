<<<<<<< HEAD
{!! Form::open(['method' => 'POST', 'route' => 'scores', 'class' => 'form-horizontal']) !!}
=======
{!! Form::open(['method' => 'POST', 'route' => 'routeName', 'class' => 'form-horizontal']) !!}
>>>>>>> e26c2be0cfc5820b68317aa5771bf1d7ae12dda2


    <div class="btn-group pull-right">
        {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
        {!! Form::submit("Add", ['class' => 'btn btn-success']) !!}
    </div>
{!! Form::close() !!}
