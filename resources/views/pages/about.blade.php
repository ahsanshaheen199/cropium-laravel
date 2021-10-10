@extends('layout')

@section('title','About')

@section('content')

@include('components.breadcrumb',['title' => 'about page'])

@include('components.about.top')

@include('components.feature-area')

@include('components.about.team-area')

@include('components.social-link',['class' => 'social-link padding-top-75 padding-bottom-90'])

@include('components.cta')

@endsection