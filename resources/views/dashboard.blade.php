@extends('layout.app')

@section('content')
    @include('flash::message')

    @include('panel.cycle')

    @include('panel.shares')
@endsection
