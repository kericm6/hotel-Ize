@extends('layouts.app')

@section('content')
    @include('components.landing.hero')
    @include('components.landing.about')
    @include('components.landing.services')
    @include('components.landing.chambres')
    @include('components.landing.gallery')
    @include('components.landing.map')
    @include('components.temoignages')
@endsection