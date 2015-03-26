<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@if(isset($pageTitle))Administrator Panel | {{ $pageTitle }}@endif</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{--CSS calls calls are auto concat and combining--}}
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <link rel="icon" type="image/png" href="images/favicon.png">
    </head>
    <body>
        <header id="sticker" class="admin">
            <div class="full-container">
                <div id="hamburger" class="hidden-desktop">
                    <a id="responsive-menu-button" href="#sidr"><span class="icon-three-bars icon-xlarge"></span></a>
                </div>
                <nav id="navigation" class="visible-desktop top-nav">
                    <ul>
                        <li><a href="{{ URL::to('admin/dashboard') }}">Admin Home</a></li>
                        <li><a href="{{ URL::to('admin/dashboard/users') }}">Users</a></li>
                        <li><a href="{{ URL::to('logout') }}">Logout</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="separator-small"></div>
        @if(Session::has('success'))
            <div class="full-container">
                <div class="alert alert-success center">
                    <span class="icon-x alert-close alert-close-success"></span>
                    {{ Session::get('success') }}
                </div>
            </div>
        @endif
        @if(Session::has('error'))
            <div class="full-container">
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