<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Valentine's Surprise</title>
</head>
<body>
    <div class="container">
        <h1>Welcome, My Love ❤️</h1>
        <div class="images">
            <img src="/images/lover1.jpg" alt="Lover 1" class="lover-img">
            <img src="/images/lover2.jpg" alt="Lover 2" class="lover-img">
        </div>
        <p>Click below to explore:</p>
        <div class="activities">
            <a href="/love-letter" class="cute-btn">Love Letter</a>
            <a href="/gallery" class="cute-btn">Memory Gallery</a>
            <a href="/quiz" class="cute-btn">Personalized Quiz</a>
            <a href="/truthordare" class="cute-btn">Truth Or Dare</a>
            <a href="/couple-goals" class="cute-btn">Our Couple Goals</a>
            <a href="/loveTips" class="cute-btn">Love Tips</a>
        </div>
    </div>
</body><style>

/* 1. Global Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body & Typography */
body {
    background-color: #f7e1e1;
    font-family: 'Arial', sans-serif;
    color: #333;
    text-align: center;
    padding-top: 60px; /* Space for fixed navbar */
}

h1 {
    color: #d81b60;
    font-size: 36px;
    margin-bottom: 20px;
    font-family: 'Cursive', sans-serif;
}

/* 2. Layout Containers */
.container {
    margin: 0 auto;
    padding: 20px;
}

/* 3. Image Styles */
.images {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 20px;
    flex-wrap: wrap;
}

.lover-img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
    border: 5px solid #e74c3c;
}

/* 4. Button Styles */
.cute-btn {
    background-color: #f8bbd0;
    color: #d81b60;
    font-size: 18px;
    padding: 15px 30px;
    border-radius: 25px;
    border: none;
    text-decoration: none;
    font-weight: bold;
    text-transform: uppercase;
    transition: background-color 0.3s ease, transform 0.3s ease;
    box-shadow: 0 4px 10px rgba(183, 28, 28, 0.3);
    margin: 10px;
    display: inline-block;
}

.cute-btn:hover {
    background-color: #d81b60;
    color: white;
    transform: scale(1.1);
}

.cute-btn:active {
    background-color: #c2185b;
}

/* 5. Responsive Styles */
@media (max-width: 768px) {
    h1 {
        font-size: 28px; /* Smaller font size on mobile */
    }

    .images {
        flex-direction: column;
        align-items: center;
    }

    .lover-img {
        width: 120px;
        height: 120px;
    }

    .activities {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 15px;
    }

    .cute-btn {
        width: 80%; /* Button takes up more width on smaller screens */
    }
}

/* For very small screens (portrait phones, etc.) */
@media (max-width: 480px) {
    h1 {
        font-size: 24px; /* Further reduce font size */
    }

    .images {
        gap: 10px;
    }

    .lover-img {
        width: 100px;
        height: 100px;
    }

    .cute-btn {
        padding: 12px 20px; /* Smaller button padding */
        font-size: 16px; /* Smaller button text */
    }
}</style>

</html>
@extends('layouts.app')

@section('content')
    
@endsection