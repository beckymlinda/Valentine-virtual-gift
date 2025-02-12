<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Love Story 💕</title>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background: linear-gradient(135deg, #ff9a9e 0%, #fad0c4 100%);
            font-family: 'Dancing Script', cursive;
            text-align: center;
            color: #b71c1c;
            margin: 0;
            padding: 0;
        }
        h1 {
            font-size: 48px;
            color: #d81b60;
            margin-top: 20px;
        }
        .carousel-item img {
            width: 80%;
            height: auto;
            border-radius: 15px;
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.3);
        }
        .carousel-container {
            max-width: 800px;
            margin: auto;
        }
        audio {
            margin-top: 20px;
        }
    </style>
</head>

<!-- Audio Element -->
<audio id="romanticMusic" src="/music/romantic-music.mp3" loop></audio>

<!-- Play Button -->
<button id="playMusicBtn" class="play-music-btn">🎶 Play Music</button>

<!-- CSS for Styling -->
<style>
    .play-music-btn {
        background: linear-gradient(135deg, #ff758c, #ff7eb3);
        color: white;
        font-size: 18px;
        font-family: 'Dancing Script', cursive;
        padding: 10px 20px;
        border: none;
        border-radius: 30px;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }
    
    .play-music-btn:hover {
        background: linear-gradient(135deg, #ff5f6d, #ff99ac);
        transform: scale(1.1);
    }
</style>

<!-- JavaScript for Play/Pause Toggle -->
<script>
    document.getElementById('playMusicBtn').addEventListener('click', function() {
        let audio = document.getElementById('romanticMusic');
        if (audio.paused) {
            audio.play();
            this.textContent = "⏸ Pause Music";
        } else {
            audio.pause();
            this.textContent = "🎶 Play Music";
        }
    });
</script>

<body>
    <h1>Our Beautiful Memories 📸</h1>
    
    <div id="memoryCarousel" class="carousel slide carousel-container" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/images/pic1.jpg" class="d-block mx-auto" alt="Memory 1">
            </div>
            <div class="carousel-item">
                <img src="/images/pic2.jpg" class="d-block mx-auto" alt="Memory 2">
            </div>
            <div class="carousel-item">
                <img src="/images/pic3.jpg" class="d-block mx-auto" alt="Memory 3">
            </div>
            <div class="carousel-item">
                <img src="/images/pic4.jpg" class="d-block mx-auto" alt="Memory 4">
            </div>
            <div class="carousel-item">
                <img src="/images/pic5.jpg" class="d-block mx-auto" alt="Memory 5">
            </div>
            <div class="carousel-item">
                <img src="/images/pic6.jpg" class="d-block mx-auto" alt="Memory 6">
            </div>
            <div class="carousel-item">
                <img src="/images/pic7.jpg" class="d-block mx-auto" alt="Memory 7">
            </div>
            <div class="carousel-item">
                <img src="/images/pic8.jpg" class="d-block mx-auto" alt="Memory 8">
            </div>
            <div class="carousel-item">
                <img src="/images/pic9.jpg" class="d-block mx-auto" alt="Memory 9">
            </div>
            <div class="carousel-item">
                <img src="/images/pic10.jpg" class="d-block mx-auto" alt="Memory 10">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#memoryCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#memoryCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>
    
    
</body>
@extends('layouts.app')

@section('content')
    
@endsection
</html>
