@extends('layout')

@section('title','Portfolio')

@section('content')

@include('components.breadcrumb',['title' => 'portfolio details page'])

@include('components.portfolio-details.about')

@include('components.portfolio-details.working-challenge')

@include('components.portfolio-details.working-process')

@include('components.portfolio-details.relative-project')

@include('components.cta')

@endsection