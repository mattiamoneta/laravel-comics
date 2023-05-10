@extends('layouts.base')

@section('page-title')
    Home Page 1
@endsection


@section('page-content')
    @include('partials.comicsStack')
    @include('partials.banner')

@endsection