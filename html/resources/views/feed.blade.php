@extends('layouts.main')

@section('title', 'Feed')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('../../public/css/feed.css') }}">
</head>
<body>

</body>
</html>

@include('snippet.snippet', ['snippets' => $snippets])

@endsection
