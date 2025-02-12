<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Quiz Results</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <h1>Quiz Results 💖</h1>
    <p>Your Score: {{ $score }}/3</p>
    <p>{{ $score == 3 ? 'Wow! You know me so well! ❤️' : ($score == 2 ? 'Almost perfect! 😊' : 'You need to know me better! 😆') }}</p>
    <a href="/quiz">Try Again</a>
</body>
</html>
@extends('layouts.app')

@section('content')
    
@endsection
