<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        return view('chat');  // View where the chat interface will appear
    }

    public function getResponse(Request $request)
    {
        $userMessage = $request->input('message');
        
        // Call the Meta AI or a third-party API here to get the response
        // For example, using OpenAI API (or any other service like DialogFlow)

        // Dummy response for now
        $aiResponse = "Hi! I'm your Valentine AI. How can I assist you today?";

        return response()->json(['response' => $aiResponse]);
    }
}
