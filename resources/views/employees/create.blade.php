<title>CSSP Team Create</title>
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Employee</div>

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

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/employees') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group num">
                                {!! Form::label('Store', 'Store:', ['class' => 'col-md-4 control-label']) !!}
                                <div class="col-md-4">
                                    {!! Form::select('store', $stores, null, array('class' => 'form-control')) !!}
                                </div>
                            </div>

                            <hr>

                            <div class="form-group employee">
                                {{--<div class="teamname"></div>--}}
                                <div class="col-md-12">
                                    {!! Form::label('FirstName', 'First Name:', ['class' => 'col-md-2 control-label']) !!}
                                    <div class="col-md-3">{!! Form::text('FirstName', null, ['class' => 'form-control']) !!}</div>
                                    {!! Form::label('LastName', 'Last Name:', ['class' => 'col-md-2 control-label']) !!}
                                    <div class="col-md-3">{!! Form::text('LastName', null, ['class' => 'form-control']) !!}</div>
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