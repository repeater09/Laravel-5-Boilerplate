<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@if(isset($pageTitle)){{ $pageTitle }}@endif</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{--CSS calls calls are auto concat and combining--}}
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <link rel="icon" type="image/png" href="images/favicon.png">
    </head>
    <body>
        <header id="sticker">
            <div class="container">
                <div id="hamburger" class="hidden-desktop">
                    <a id="responsive-menu-button" href="#sidr"><span class="icon-three-bars icon-xlarge"></span></a>
                </div>
                <nav id="navigation" class="visible-desktop top-nav">
                    <ul>
                        <li><a href="{{ URL::to('/') }}">Home</a></li>
                        <li><a href="{{ URL::to('#') }}">Link</a></li>
                        <li class="menu menu-hover">
                            <a href="#">Drop-down Link</a>
                            <ul class="submenu">
                                <li><a href="#">Menu item 1</a></li>
                                <li><a href="#">Menu item 2</a></li>
                                <li><a href="#">Menu item 3</a></li>
                                <li><a href="#">Menu item 4</a></li>
                            </ul>
                        </li>
                        <li class="menu menu-hover">
                            @if(isset(Auth::user()->id))
                                @if(Auth::user()->super_user == 1)
                                    <a href="{{ URL::to('admin/dashboard') }}"><span class="icon-man-people-streamline-user icon"></span> Return to Admin Dashboard</a>
                                    <ul class="submenu">
                                        <li><a href="{{ URL::to('logout') }}">Logout</a></li>
                                    </ul>
                                @else
                                    <a href="{{ URL::to('dashboard') }}"><span class="icon-man-people-streamline-user icon"></span> Return to Dashboard</a>
                                    <ul class="submenu">
                                        <li><a href="{{ URL::to('dashboard/edit/' . Auth::user()->id . '')  }}">Edit your account</a></li>
                                        <li><a href="{{ URL::to('logout') }}">Logout</a></li>
                                    </ul>
                                @endif
                            @else
                                <a href="{{ URL::to('login') }}"><span class="icon-man-people-streamline-user icon"></span> Login</a>
                                <ul class="submenu">
                                    <li><a href="{{ URL::to('sign-up') }}">Sign Up</a></li>
                                </ul>
                            @endif
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="separator-small"></div>
        @if(Session::has('success'))
            <div class="container">
                <div class="alert alert-success center">
                    <span class="icon-x alert-close alert-close-success"></span>
                    {{ Session::get('success') }}
                </div>
            </div>
        @endif
        @if(Session::has('error'))
            <div class="container">
                <div class="alert alert-error center">
                    <span class="icon-x alert-close alert-close-error"></span>
                    {{ Session::get('error') }}
                </div>
            </div>
        @endif
        @yield('main_content')
        {{--JS calls are auto concat and combining--}}
        <script src="/js/all.js"></script>
        <script>
            $(document).ready(function() {
                $("#sticker").sticky({topSpacing:0});
                $('#responsive-menu-button').sidr({
                    name: 'sidr-main',
                    source: '#navigation'
                });
            });
        </script>
    </body>
</html>