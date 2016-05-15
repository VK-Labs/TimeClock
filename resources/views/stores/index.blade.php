@extends('layouts.app')

@section('content')
    <title>Stores - Time Clock</title>
    <h1>Stores {{ $stores->count() }}</h1>

    <hr/>

    @foreach($stores as $store)
        <stores>
            <div class="list-group-item col-md-2 col-md-offset-5 text-center">
                <a href=" {{ url('/stores', [$store->id]) }}" >{{ $store->name }}</a></br>
                {{ $organizations[$store->organizationID] }} {{ $store->pin }}
            </div>
        </stores>
    @endforeach
@stop