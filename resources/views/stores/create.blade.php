<title>CSSP Team Create</title>
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Team</div>

                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/teams') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group num">
                                {!! Form::label('number', 'Number of Teams:', ['class' => 'col-md-3 control-label']) !!}
                                <div class="col-md-2">
                                    {!! Form::text('number', null, ['class' => 'form-control', 'id' => 'number']) !!}
                                </div>

                                {!! Form::label('Organization', 'Organization:', ['class' => 'col-md-2 control-label']) !!}
                                <div class="col-md-4">
                                    {!! Form::select('organization', $organization, null, array('class' => 'form-control')) !!}
                                </div>
                            </div>

                            <hr>

                            <div class="form-group teamname">
                                {{--<div class="teamname"></div>--}}
                                {!! Form::label('TeamName', 'Team Name:', ['class' => 'col-md-4 control-label']) !!}
                                <div class="col-md-6">
                                    {!! Form::text('TeamName[]', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>

                            <div class="moreForms"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection