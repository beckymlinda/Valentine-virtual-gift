<?php

namespace App\Http\Controllers;
use App\Models\QuizAnswer;
use Illuminate\Http\Request;

class QuizController extends Controller{
public function store(Request $request) {
    QuizAnswer::create([
        'name' => $request->name,
        'q1' => $request->q1,
        'q2' => $request->q2,
        'q3' => $request->q3,
    ]);

    return response()->json(['message' => 'Quiz submitted successfully!']);
}
}
