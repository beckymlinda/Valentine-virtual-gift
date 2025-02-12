<!DOCTYPE html> 
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Love Letter 💌</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Romantic Play Button */
        .music-button {
            background-color: #e91e63;
            color: white;
            font-family: 'Dancing Script', cursive;
            font-size: 20px;
            border: none;
            padding: 12px 20px;
            border-radius: 50px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            box-shadow: 0px 4px 10px rgba(233, 30, 99, 0.4);
            transition: all 0.3s ease-in-out;
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
        }

        .music-button:hover {
            background-color: #d81b60;
            box-shadow: 0px 6px 15px rgba(233, 30, 99, 0.6);
            transform: translateX(-50%) scale(1.1);
        }

        .heart-icon {
            font-size: 24px;
            animation: heartbeat 1.5s infinite;
        }

        @keyframes heartbeat {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.2);
            }
        }
    </style>
</head>
<body>
    <!-- Background Music -->
    <audio id="background-music" loop>
        <source src="{{ asset('music/love-song.mp3') }}" type="audio/mp3">
        Your browser does not support the audio element.
    </audio>

    <div class="love-letter-container">
        <img src="/images/heart.png" class="heart-decoration heart1">
        <img src="/images/heart.png" class="heart-decoration heart2">
        <img src="/images/heart.png" class="heart-decoration heart3">
        
        <h1 style="font-family: 'Dancing Script', cursive; color: #b71c1c;">My Love 💖</h1>
        
        <p class="love-letter-text">
            My dearest Kim,  
            <br><br>
            From the moment we met, my heart has been yours.  
            Every laugh we share, every hug we embrace, and every memory we create  
            makes me fall for you even more.  
            <br><br>
            You are my safe place, my joy, and my greatest love.  
            I cherish you more than words can say.  
            <br><br>
            Forever yours,  
            <br>
            Becky 💕
        </p>
    </div>

    <!-- Play/Pause Button -->
    <button class="music-button" onclick="toggleMusic()">
        <span id="music-icon" class="heart-icon">❤️</span> Play Music
    </button>

    <script>
        function toggleMusic() {
            var music = document.getElementById("background-music");
            var icon = document.getElementById("music-icon");
            if (music.paused) {
                music.play();
                icon.innerHTML = "💖"; // Change to a glowing heart
            } else {
                music.pause();
                icon.innerHTML = "❤️"; // Change back to a normal heart
            }
        }
    </script>
</body>
</html>
@extends('layouts.app')

@section('content')
    
@endsection
