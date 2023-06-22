@extends('layouts.main')

@section ('title', 'New Post')

@section ('content')

    <div class="mainContainerTopNav">
        <span><h2>New post</h2></span>
    </div>

    <head>
    <title>New Post</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/snippetCreate.css') }}">
    </head>
    <body>
<div class="newPostContainer">
    <div class="newPostHeader">
        <span class="newPost">New Post</span>
        <span class="publicPrivate">Public</span>
        <img src="close-icon.svg" alt="Close" id="closeIcon">
    </div>
    <form action="{{ route('snippet.store') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="title">Title<span>*</span></label>
            <input type="text"
                class="@error('title') is-invalid @enderror"
                id="title"
                name="title"
                value="{{ old('title', '') }}"
            >
            @error('title')
            <div class="invalid-feedback">
                You forgot your title
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="content">Content<span>*</span></label>
            <textarea type="text"
                class="@error('content') is-invalid @enderror"
                id="content"
                name="content"
                rows="20"
            >{{ old('content', '') }}</textarea>
            @error('content')
            <div class="invalid-feedback">
                You forgot your content
            </div>
            @enderror
        </div>

        <div class="belowForm">
            <label for="options"></label>
            <select id="options" name="options" required>
                <option value="" disabled selected>Select a language</option>
                <option value="option1">HTML</option>
                <option value="option2">CSS</option>
                <option value="option3">JavaScript</option>
                <option value="option4">PHP</option>
                <option value="option5">Java</option>
            </select>

        <div class="buttons">
        <input class="btnSave" type="submit" value="Save">
        <input class="btnSubmit" type="submit" value="Submit">
        </div>
        </div>
    </form>
</div>
</body>

@endsection
