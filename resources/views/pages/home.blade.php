@extends('layout')

@section('title','Home')

@section('content')

@include('components.home.hero')

@include('components.home.about')

@include('components.feature-area')

@include('components.home.experience-skill')

@include('components.home.portfolio-area')

@include('components.client-area')

@include('components.counterup')

@include('components.home.award-area')

@include('components.social-link',['class' => 'social-link padding-top-85 padding-bottom-90'])

@include('components.cta')

@endsection