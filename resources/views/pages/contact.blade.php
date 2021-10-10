@extends('layout')

@section('title','Contact')

@section('content')

@include('components.breadcrumb',['title' => 'contact page'])

@include('components.contact-top')

@include('components.map')

@include('components.cta')

@endsection