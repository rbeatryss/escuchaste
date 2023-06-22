@extends('layouts.main')

@section('title', 'Snippet')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="{{ asset('css/snippet.css') }}">
</head>
<body>
@foreach ($snippets as $snippet)
    <div class="snippetContainer">
        <div class="userInfo">
            <img class="postImage"/>
            <div class="snippetUserAction">
                <span class="username">{{ $snippet->user_id }}</span>
                <a href="#" class="follow">Follow</a>
            </div>
        </div>
        <div class="snippetFullContent">
            <span class="title">{{ $snippet->title }}</span>
            <span class="content">{{ $snippet->content }}</span>
        </div>
        <div class="snippetActions">
            <img src="like-icon.svg" alt="Like" id="likeIcon">
            <img src="comment-icon.svg" alt="Comment" id="commentIcon">
        </div>
    </div>
@endforeach


</body>
</html>

@endsection
