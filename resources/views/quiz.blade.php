<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Love Quiz</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let correctAnswers = {
                q1: "Place A",
                q2: "Red",
                q3: "Feb 14"
            };

            function fadeEffect() {
                document.querySelectorAll("input[type='radio']").forEach(input => {
                    input.addEventListener("change", function() {
                        this.parentElement.style.opacity = "1";
                        this.parentElement.classList.add("selected");
                    });
                });
            }

            function submitQuiz(event) {
                event.preventDefault();

                let formData = new FormData(document.getElementById('quiz-form'));
                let score = 0;
                
                // Check answers
                for (let key in correctAnswers) {
                    if (formData.get(key) === correctAnswers[key]) {
                        score++;
                    }
                }

                // Add a fallback if the name is not provided
                let name = formData.get("name") || "Anonymous";

                fetch('/quiz-submit', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json'  // Make sure server returns JSON response
                    }
                })
                .then(response => response.json())
                .then(data => {
                    document.getElementById("quiz-results").style.display = "block";
                    document.getElementById("quiz-results").innerHTML = 
                        `<h2>You scored: ${score}/3</h2>
                        <p>${score == 3 ? 'Wow! You know me so well! ❤️' : (score == 2 ? 'Almost perfect! 😊' : 'You need to know me better! 😆')}</p>`;
                    document.getElementById("quiz-results").style.animation = "slideDown 0.5s ease-in-out forwards";
                })
                .catch(error => console.error('Error:', error));
            }

            document.getElementById("quiz-form").addEventListener("submit", submitQuiz);
            fadeEffect();
        });
    </script>

    <style>
        /* General Styling */
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to bottom, #ff9a9e, #fad0c4);
            text-align: center;
            padding: 20px;
        }

        h1 {
            color: #fff;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.2);
            font-size: 28px;
        }

        /* Form Container */
        form {
            max-width: 400px;
            background: white;
            margin: auto;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            text-align: left;
        }

        /* Labels */
        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }

        /* Input Box */
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 8px;
            border: 1px solid #ccc;
            transition: 0.3s;
        }

        input[type="text"]:focus {
            border: 2px solid #ff4081;
            outline: none;
        }

        /* Radio Buttons */
        input[type="radio"] {
            margin-right: 5px;
        }

        /* Submit Button */
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background: linear-gradient(to right, #ff416c, #ff4b2b);
            color: white;
            border: none;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            border-radius: 8px;
            transition: 0.3s;
            margin-top: 15px;
        }

        input[type="submit"]:hover {
            background: linear-gradient(to right, #ff6a88, #ff6a58);
            transform: scale(1.05);
        }

        /* Quiz Results */
        #quiz-results {
            display: none;
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
            color: #333;
            background: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* Responsive Design */
        @media (max-width: 480px) {
            form {
                width: 90%;
                padding: 15px;
            }

            input[type="submit"] {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>

    @extends('layouts.app')

    @section('content')
        <h1>How Well Do You Know Me? 💕</h1>
        
        <!-- Name field added here -->
        <form id="quiz-form">
            <label for="name">Your Name:</label>
            <input type="text" name="name" placeholder="Enter your name" required><br>

            <label>Where did we first meet?</label>
            <input type="radio" name="q1" value="Place A" required> Place A<br>
            <input type="radio" name="q1" value="Place B"> Place B<br>
            <input type="radio" name="q1" value="Place C"> Place C<br>

            <label>What is my favorite color?</label>
            <input type="radio" name="q2" value="Red" required> Red<br>
            <input type="radio" name="q2" value="Blue"> Blue<br>
            <input type="radio" name="q2" value="Green"> Green<br>

            <label>What is our special date?</label>
            <input type="radio" name="q3" value="Feb 14" required> Feb 14<br>
            <input type="radio" name="q3" value="March 10"> March 10<br>
            <input type="radio" name="q3" value="Dec 25"> Dec 25<br>

            <input type="submit" value="Submit">
        </form>

        <div id="quiz-results"></div>
    @endsection

</body>
</html>
