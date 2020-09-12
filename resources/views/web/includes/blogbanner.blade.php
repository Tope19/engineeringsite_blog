<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Azulengineering</title>
    <link rel="stylesheet" href="web/css/hover.css">
    <link rel="stylesheet" href="web/fontawesome/css/all.css">
    <link rel="stylesheet" href="web/sass/main.css">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="web/sass/vendours/boostrap/css/bootstrap.css">
</head>

<body>
    
<div class="container">
                <nav class="header__nav">
                    <div class="row">
                        <div class="col-lg-3">
                            <img src="web/images/logo.png" alt="logo" class="header__logo">
                            <div class="header__icons hamburger-menu">
                                <i class="fal fa-bars hamburger-menu-bar"></i>
                                <i class="fal fa-times hamburger-menu-times"></i>
                                <i class="fal fa-user"></i>
                                <i class="fal fa-lock"></i>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ul id="navBar">
                                <li><a href="{{url('/')}}" class="hvr-underline-from-center">Home</a></li>
                                <li><a href="{{ route('our-works') }}" class="hvr-underline-from-center">Our works</a></li>
                                <li><a href="{{ url('/about-us') }}" class="hvr-underline-from-center">About us</a></li>
                                <li><a href="{{ route('our-blog') }}" class="hvr-underline-from-center">Blog</a></l7i> 
                                <li><a href="{{ url('/our-team') }}" class="hvr-underline-from-center">Meet the team</a></li>
                                <li><a href="{{ route('contact-us') }}" class="hvr-underline-from-center">Contact us</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3">
                            <div class="header__nav--btn">
                                @guest
                                <a href="{{ url('login') }}" class="btn btn--gradient signUp">Sign In</a>
                                @else
                                <a href="{{ url('home') }}" class="btn btn--gradient signUp">Dashboard</a>
                                @endguest
                            </div>
                        </div>
                    </div>
                </nav>
    
                <div class="header__caption">
                    <h1>The Blog<br></h1>
                    <p>Home <i class="fal fa-arrow-right"></i> Blog</p>
                </div>
            </div>