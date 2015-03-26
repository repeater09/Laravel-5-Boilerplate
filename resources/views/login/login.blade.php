@extends('layout.main')

@section('css')

@stop

@section('main_content')
    <div class="container">
        <div class="row">
            <div class="sixteen columns">
                <div class="login">
                    <h2>Login</h2>
                    @if (count($errors) > 0)
                        <div class="alert alert-error">
                            <span class="icon-x alert-close alert-close-error"></span>
                            <ul class="remove-bottom">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form role="form" method="POST" action="/login">
                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
                        <div>
                            <input type="text" name="email" placeholder="Email">
                        </div>
                        <div>
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <div>
                            <button type="submit">Login</button>
                            <a href="{{ URL::to('sign-up') }}" class="btn btn-outline-information">Or create an account</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('javascript')

@stop