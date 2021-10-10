@extends('layout')

@section('title','Portfolio')

@section('content')

@include('components.breadcrumb',['title' => 'portfolio page'])

@include('components.portfolio.portfolio-item-area')

@include('components.cta')

@endsection