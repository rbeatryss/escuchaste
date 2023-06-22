<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>@yield('title', 'escuchaste')</title>
</head>
<body>
<div class="container">
<div class="aside">
    <div class="welcome">
    <img src="{{ asset('img/anonymous.png') }}" alt="Profile Image">
    <!-- <img src="{{ '#' ?: asset('img/anonymous.png') }}" alt="Profile Image"> -->
        <h1 class="welcomeUser">Hi, User</h1> {{-- {{ $userName }} --}}
        <a href="{{ route('login') }}" class="LogInSignUp">Log in</a>
        <div class="followersFollowing">
        <div class="column">
            <h3 class="followers">Followers</h3>
            <p>30</p> {{-- {{ $followersCount }} --}}
        </div>
        <div class="column">
            <h3>Following</h3>
            <p>28</p> {{-- {{ $followingCount }} --}}
        </div>
        </div>
    </div>

    <ul class="navbar">
        <li><a href="/feed"><img src="{{ asset('img/icon_home_after.svg') }}" alt="icon_home"><h2>Home</h2></a></li>
        <li><a href="saved"><img src="{{ asset('img/icon_saved.svg') }}" alt="icon_saved"><h2>Saved</h2></a></li>
        <li><a href="setting"><img src="{{ asset('img/icon_settings.svg') }}" alt="icon_settings"><h2>Settings</h2></a></li>
    </ul>
</div>
<div class="mainContainer">
    <div class="mainContainerTopNav">
        <span class="displayDescription"><h2>Explore all</h2></span> {{--{{ $pageTitle }}--}}
            <a href="{{ route('snippet.create') }}" class="btnNewPost">New post +</a>
    </div>
    <div class="mainContainerContent">
        @yield ('content')
    </div>
</div>
</body>
