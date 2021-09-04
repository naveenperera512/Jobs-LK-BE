@extends('employeer::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('employeer.name') !!}
    </p>
@endsection
