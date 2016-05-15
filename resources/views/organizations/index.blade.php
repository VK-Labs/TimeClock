@extends('layouts.app')

@section('content')
    <title>Organizations - Time Clock</title>
    <h1>Organizations {{ $organizations->count() }}</h1>

    <hr/>

    @foreach($organizations as $organization)
        <organizations>
            <div class="list-group-item col-md-2 col-md-offset-5 text-center">
                <a href=" {{ url('/organizations', [$organization->id]) }}" >{{ $organization->name }}</a></br>
                {{ $organization->pin }}
            </div>
        </organizations>
    @endforeach
@stop