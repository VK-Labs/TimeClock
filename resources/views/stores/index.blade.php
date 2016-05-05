@extends('layouts.app')

@section('content')
    <h1>Stores</h1>

    <hr/>

    @foreach($stores as $store)
        <team>
            <h2><a href=" {{ url('/stores', [$store->id]) }}" >{{ $store->name }}</a></h2>
            <div class="body">{{ $organizations[$store->organizationID] }}</div>
        </team>
    @endforeach
@stop