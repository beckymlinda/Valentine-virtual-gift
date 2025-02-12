<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Romantic Truth or Dare 💕</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #ffe6e6;
            font-family: 'Dancing Script', cursive;
            text-align: center;
            color: #b71c1c;
        }

        .game-container {
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0px 5px 15px rgba(183, 28, 28, 0.3);
            margin-top: 50px;
            position: relative;
        }

        h1 {
            font-size: 36px;
        }

        .button-container {
            margin-top: 20px;
        }

        .game-button {
            background-color: #e91e63;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 20px;
            border-radius: 50px;
            cursor: pointer;
            box-shadow: 0px 4px 10px rgba(233, 30, 99, 0.4);
            transition: all 0.3s ease-in-out;
            margin: 10px;
        }

        .game-button:hover {
            background-color: #d81b60;
            box-shadow: 0px 6px 15px rgba(233, 30, 99, 0.6);
            transform: scale(1.1);
        }

        .result {
            font-size: 24px;
            font-weight: bold;
            margin-top: 30px;
            opacity: 0;
            transition: opacity 0.8s ease-in-out;
        }

        .heart-decoration {
            width: 40px;
            height: auto;
            position: absolute;
        }

        .heart1 { top: -15px; left: 20px; }
        .heart2 { top: -10px; right: 20px; }

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
    <!-- Romantic Background Music -->
    <audio id="background-music" autoplay loop>
        <source src="{{ asset('music/romantic-music.mp3') }}" type="audio/mp3">
        Your browser does not support the audio element.
    </audio>
    <button class="music-button" onclick="toggleMusic()">
        <span id="music-icon" class="heart-icon">❤️</span> Play Music
    </button>

    <script>
        function toggleMusic() {
            var music = document.getElementById("background-music");
            var icon = document.getElementById("music-icon");
            if (music.paused) {
                music.play();
                icon.innerHTML = "💖"; // Change to glowing heart
            } else {
                music.pause();
                icon.innerHTML = "❤️"; // Change back to normal heart
            }
        }
    </script>
    <div class="game-container">
        <img src="/images/heart.png" class="heart-decoration heart1">
        <img src="/images/heart.png" class="heart-decoration heart2">

        <h1>Romantic Truth or Dare 💞</h1>
        <p>Click a button to reveal a romantic truth or dare!</p>

        <div class="button-container">
            <button class="game-button" onclick="playGame('truth')">💖 Truth</button>
            <button class="game-button" onclick="playGame('dare')">🔥 Dare</button>
        </div>

        <p class="result" id="game-result"></p>
    </div>

    <script>
        const truths = [
            "What was your first impression of me?",
            "What do you love most about our relationship?",
            "What is your favorite memory of us together?",
            "Describe our perfect date night.",
            "If you could relive one moment with me, what would it be?",
            "What is one thing I do that always makes you smile?",
            "What is something you've never told me before?",
            "What do you think makes us a great couple?"
        ];

        const dares = [
            "Give me a long, warm hug for 30 seconds. 🤗",
            "Whisper something romantic in my ear. 💕",
            "Write me a short love poem right now. ✍️",
            "Kiss me on the forehead and tell me something sweet. 💋",
            "Hold my hands and tell me three things you love about me. 🥰",
            "Send me a cute voice note saying 'I love you'. 🎙️",
            "Slow dance with me for one minute (even without music). 💃🕺",
            "Look into my eyes for 20 seconds without saying a word. 👀❤️"
        ];

        function playGame(type) {
            let resultText = "";
            if (type === "truth") {
                resultText = truths[Math.floor(Math.random() * truths.length)];
            } else {
                resultText = dares[Math.floor(Math.random() * dares.length)];
            }

            let resultElement = document.getElementById("game-result");
            resultElement.style.opacity = "0";  // Reset opacity
            setTimeout(() => {
                resultElement.textContent = resultText;
                resultElement.style.opacity = "1";  // Fade in effect
            }, 300);
        }
    </script>
</body>
</html>
@extends('layouts.app')

@section('content')
    
@endsection
