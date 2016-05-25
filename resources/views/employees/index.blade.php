@extends('layouts.app')

@section('content')
    <h1>Employees {{ $employees->count() }}</h1>

    <hr/>

    @foreach($employees as $employee)
        <Employee>
            <h2><a href=" {{ url('/employees', [$employee->id]) }}" >{{ $employee->firstName }} {{ $employee->lastName }}</a></h2>
            <div class="body">{{ $stores[$employee->storeID] }}</div>
        </Employee>
    @endforeach
@stop