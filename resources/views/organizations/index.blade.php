@extends('app')

@section('content')
    <h1>Organizations</h1>

    <hr/>

    @foreach($organizations as $organization)
        <team>
            <div class="list-group-item col-md-2 col-md-offset-5 text-center"><a href=" {{ url('/sports', [$organization->id]) }}" >{{ $organization->name}}</a></div>
        </team>
    @endforeach
@stop