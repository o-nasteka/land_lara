@extends('default.layouts.layout')

@section('navbar')
    @parent
@endsection

@section('header')
    @parent
@endsection

@section('sidebar')
    @parent

    <div class="sidebar-module">
        <h4>About</h4>
        <p class="blog-post-meta">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab culpa ducimus et expedita laudantium nihil! Aliquid autem dolorem doloribus eum, incidunt itaque laboriosam? Cumque doloribus esse laboriosam natus sunt tenetur.</p>

    </div>
@endsection

{{-- Blog --}}
@section('content')
    @include('default.content')
@endsection