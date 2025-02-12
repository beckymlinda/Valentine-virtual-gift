<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucket of Relationship Tips 💖</title>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #ffe6f1;
            font-family: 'Dancing Script', cursive;
            text-align: center;
            color: #d81b60;
            margin: 0;
            padding: 0;
        }
        .bucket-container {
            max-width: 500px;
            margin: 50px auto;
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 5px 20px rgba(183, 28, 28, 0.3);
            box-sizing: border-box;
        }
        h1 {
            font-size: 36px;
            color: #d81b60;
        }
        .tip {
            background-color: #f8bbd0;
            padding: 15px;
            border-radius: 10px;
            margin: 10px 0;
            font-size: 18px;
            color: #c2185b;
            font-weight: bold;
            box-shadow: 0px 5px 10px rgba(183, 28, 28, 0.2);
            transition: transform 0.3s ease;
        }
        .tip:hover {
            transform: scale(1.05);
        }
        .tip .heart {
            color: #ff4081;
            font-size: 20px;
        }
        .bucket-header {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .bucket-tips {
            margin-top: 20px;
        }
        .tip button {
            background-color: #d81b60;
            color: white;
            padding: 8px 16px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            margin-top: 10px;
        }
        .tip button:hover {
            background-color: #c2185b;
        }
    </style>
</head>
<body>
    <div class="bucket-container">
        <h1>Bucket of Relationship Tips 💖</h1>
        <div class="bucket-header">Little Things to Keep the Love Alive</div>
        
        <div class="bucket-tips">
            <div class="tip">
                <span class="heart">❤️</span> **Express Appreciation Often**: Always show gratitude for the small things, making your partner feel valued. 
                <button onclick="alert('Love is expressed every day!')">More Info</button>
            </div>
            <div class="tip">
                <span class="heart">❤️</span> **Communicate Openly**: Share thoughts and feelings without fear of judgment or rejection.
                <button onclick="alert('Honest communication brings us closer.')">More Info</button>
            </div>
            <div class="tip">
                <span class="heart">❤️</span> **Create Fun Traditions**: Build new memories and strengthen your bond by creating personalized rituals.
                <button onclick="alert('New traditions = new memories!')">More Info</button>
            </div>
            <div class="tip">
                <span class="heart">❤️</span> **Respect Each Other’s Space**: Giving each other room to breathe fosters mutual respect and independence.
                <button onclick="alert('A healthy balance of closeness and space.')">More Info</button>
            </div>
            <div class="tip">
                <span class="heart">❤️</span> **Surprise Each Other**: Thoughtful surprises like notes or small gifts can make each day feel special.
                <button onclick="alert('Surprises make hearts grow fonder!')">More Info</button>
            </div>
        </div>
    </div>
</body>
</html>
@extends('layouts.app')

@section('content')
    
@endsection
