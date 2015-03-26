@extends('layout.admin')

@section('css')

@stop

@section('main_content')
    <div class="full-container">
        <div class="row">
            <div class="sixteen columns">
                <div class="login">
                    <h2>Create New User</h2>
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
                    <form role="form" method="POST" action="/admin/dashboard/users/create">
                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
                        <div>
                            <input type="text" name="email" placeholder="Email">
                        </div>
                        <div>
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <div>
                            <input type="password" name="confirm_password" placeholder="Confirm Password">
                        </div>
                        <div>
                            <input type="text" name="first_name" placeholder="First Name">
                        </div>
                        <div>
                            <input type="text" name="last_name" placeholder="Last Name">
                        </div>
                        <div>
                            @if(isset(Auth::user()->id))
                                @if(Auth::user()->super_user == 1)
                                    Super User? <input type="checkbox" name="super_user" value="Bike">
                                @endif
                            @endif
                        </div>
                        <div>
                            <button type="submit">Create Account</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('javascript')

@stop