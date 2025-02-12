<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valentine's Day Chat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .chat-container {
            width: 400px;
            max-width: 100%;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            padding: 20px;
        }
        .chat-box {
            max-height: 400px;
            overflow-y: auto;
            margin-bottom: 20px;
        }
        .chat-message {
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
        }
        .user-msg {
            background-color: #ffe0b2;
            text-align: right;
        }
        .ai-msg {
            background-color: #e3f2fd;
            text-align: left;
        }
        input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>

<div class="chat-container">
    <div class="chat-box" id="chatBox"></div>
    <input type="text" id="messageInput" placeholder="Type your message...">
</div>

<script>
    const messageInput = document.getElementById('messageInput');
    const chatBox = document.getElementById('chatBox');

    messageInput.addEventListener('keydown', async function(event) {
        if (event.key === 'Enter' && messageInput.value.trim() !== '') {
            const userMessage = messageInput.value.trim();
            addMessage(userMessage, 'user');
            messageInput.value = '';

            // Send the message to the backend
            const response = await fetch('/chat', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({ message: userMessage })
            });
            const data = await response.json();

            // Display AI response
            addMessage(data.response, 'ai');
        }
    });

    function addMessage(message, sender) {
        const messageDiv = document.createElement('div');
        messageDiv.classList.add('chat-message', sender === 'user' ? 'user-msg' : 'ai-msg');
        messageDiv.textContent = message;
        chatBox.appendChild(messageDiv);
        chatBox.scrollTop = chatBox.scrollHeight;
    }

import OpenAI from "openai";

const openai = new OpenAI({
  apiKey: "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",
});

const completion = openai.chat.completions.create({
  model: "gpt-4o-mini",
  store: true,
  messages: [
    {"role": "user", "content": "write a haiku about ai"},
  ],
});

completion.then((result) => console.log(result.choices[0].message));
</script>
</body>
</html>
