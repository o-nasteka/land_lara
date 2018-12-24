@extends('default.layouts.layout')

@section('header')

@endsection

@section('sidebar')
    @parent
@endsection

{{--<pre>--}}
{{--{{ print_r(Session::all()) }}--}}
{{--</pre>--}}

@section('content')
    <div class="container">
        <div class="col-md-6">
            <h3>{{ $title }}</h3>
            <form  method="post" action="{{ route('contact') }}" >
            <div class="form-group">
                <label for="InputName">Name</label>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="InputName" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="InputEmail">Email address</label>
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="InputEmail" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="InputSite">Site</label>
                <input type="text" class="form-control" name="site" value="{{ old('site') }}" id="InputSite" placeholder="Site">
            </div>
            <div class="form-group">
                <label for="InputText">Text</label>
                <textarea class="form-control" name="text" rows="5" id="InputText">{{ old('text') }}</textarea>
            </div>

                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
@endsection