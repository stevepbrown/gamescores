{!! Form::open(['method' => 'POST', 'route' => 'scores', 'class' => 'form-horizontal']) !!}


    <div class="btn-group pull-right">
        {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
        {!! Form::submit("Add", ['class' => 'btn btn-success']) !!}
    </div>
{!! Form::close() !!}
