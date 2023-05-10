@extends('layouts.base')

@section('page-title')
    DC Comics - Home Page
@endsection

@section('page-content')
    @include('partials.comicsStack')
    @include('partials.banner')
@endsection