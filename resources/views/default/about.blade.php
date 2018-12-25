@extends('default.layouts.layout')

@section('header')

@endsection

@section('sidebar')

@endsection

@section('content')
    <div class="jumbotron">
        <div class="container">
            @if ($page)
                @if ($title)
                    <h2>{{ $title }}</h2>
                @endif
                {!! $page->text !!}
            @endif
        </div>
    </div>
@endsection