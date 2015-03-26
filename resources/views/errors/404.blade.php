@extends('layout.main')

@section('css')

@stop

@section('main_content')
    <div class="container">
        <div class="row">
            <div class="one-half column">
                <h1>Oh No!</h1>
                <p>The page you are looking for doesn't appear to exist. You maay wanna return <a href="{{ URL::to('/') }}">home</a></p>
        </div>
    </div>
@stop

@section('javascript')

@stop