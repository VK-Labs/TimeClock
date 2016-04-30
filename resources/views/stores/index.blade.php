@extends('app')

@section('content')
    <h1>Stores</h1>

    <hr/>

    @foreach($stores as $store)
        <team>
            <h2><a href=" {{ url('/teams', [$store->id]) }}" >{{ $team->name }}</a></h2>
            <div class="body">{{ $store->password }}</div>
            <div class="body">{{ $organization[$store->orgazationID] }}</div>
        </team>
    @endforeach
@stop