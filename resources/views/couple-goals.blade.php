<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Couple Goals 💑</title>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
    @extends('layouts.app')

    @section('content')
        
    @endsection
    <style>
        body {
            background: linear-gradient(135deg, #ff9a9e 0%, #fad0c4 100%);
            font-family: 'Dancing Script', cursive;
            text-align: center;
            color: #b71c1c;
            margin: 0;
            padding: 0;
        }
        .goals-container {
            max-width: 600px;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 5px 20px rgba(183, 28, 28, 0.3);
            box-sizing: border-box;
        }
        h1 {
            font-size: 36px;
            color: #d81b60;
        }
        p {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .goal-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 18px;
            padding: 10px;
            border-bottom: 1px solid #f1f1f1;
        }
        .goal-item span {
            flex-grow: 1;
            text-align: left;
        }
        .goal-item input {
            transform: scale(1.3);
            margin-right: 10px;
        }
        .goal-item button {
            background-color: #d81b60;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        .goal-item button:hover {
            background-color: #c2185b;
        }
        .goal-item .completed {
            color: #4caf50;
            font-weight: bold;
        }
        .goal-item .incomplete {
            color: #f44336;
            font-weight: bold;
        }
        form {
            display: flex;
            gap: 10px;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }
        form input[type="text"] {
            flex-grow: 1;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        form button {
            background-color: #d81b60;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        form button:hover {
            background-color: #c2185b;
        }
        @media (max-width: 600px) {
            .goal-item {
                flex-direction: row;
                align-items: center;
                font-size: 16px;
            }
            form input[type="text"] {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="goals-container">
        <h1>Prayer Petition and Couple Goals  💕</h1>
        <p>Check off our goals as we achieve them!</p>

        @foreach ($goals as $goal)
        <div class="goal-item">
            <span>{{ $goal->goal }}</span>
            <input type="checkbox" data-id="{{ $goal->id }}" {{ $goal->is_completed ? 'checked' : '' }}>
            <button class="delete-btn" data-id="{{ $goal->id }}">❌</button>
        </div>
        @endforeach

        <form action="{{ route('couple-goals.store') }}" method="POST">
            @csrf
            <input type="text" name="goal" placeholder="Add a new goal..." required>
            <button type="submit">Add</button>
        </form>
    </div>

    <script>
        document.querySelectorAll('.goal-item input').forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                fetch(`/couple-goals/${this.dataset.id}`, {
                    method: 'PATCH',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ is_completed: this.checked })
                }).then(response => response.json())
                  .then(data => {
                      if (data.success) {
                          const statusSpan = this.closest('.goal-item').querySelector('.incomplete, .completed');
                          statusSpan.textContent = this.checked ? 'Completed' : 'Pending';
                          statusSpan.className = this.checked ? 'completed' : 'incomplete';
                      }
                  });
            });
        });

        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function() {
                const goalId = this.dataset.id;
                fetch(`/couple-goals/${goalId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                }).then(response => response.json())
                  .then(data => {
                      if (data.success) {
                          this.parentElement.remove();
                      }
                  });
            });
        });
    </script>
</body>
</html>
