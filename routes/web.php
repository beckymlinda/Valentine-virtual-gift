<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoveController;
use Illuminate\Http\Request;
use App\Http\Controllers\CoupleGoalController;

use App\Http\Controllers\QuizController;

Route::get('/', [LoveController::class, 'index']);
Route::get('/love-letter', [LoveController::class, 'loveLetter']);
Route::get('/gallery', [LoveController::class, 'gallery']);
Route::get('/quiz', [LoveController::class, 'quiz']);
Route::post('/quiz-submit', [QuizController::class, 'store']);
Route::get('/quiz-results', function(Request $request) {
    $score = $request->query('score');
    return view('quiz-results', compact('score'));
});

Route::get('/', function () {
    return view('home'); // Ensure 'home.blade.php' exists in resources/views
})->name('home');

Route::get('/love-letter', function () {
    return view('love-letter');
})->name('love-letter');
Route::get('/truthordare', function () {
    return view('truthordare');
})->name('truthordare');

Route::get('/quiz', function () {
    return view('quiz');
})->name('quiz');
Route::get('/loveTips', function () {
    return view('loveTips');
})->name('loveTips');
use App\Http\Controllers\ChatController;

Route::get('/chat', [ChatController::class, 'index']);
Route::post('/chat', [ChatController::class, 'getResponse']);

use App\Http\Controllers\OpenAIController;

Route::get('/chat', [OpenAIController::class, 'chat']);

Route::get('/couple-goals', [CoupleGoalController::class, 'index']);
Route::post('/couple-goals', [CoupleGoalController::class, 'store']);
Route::patch('/couple-goals/{goal}', [CoupleGoalController::class, 'update']);
Route::delete('/couple-goals/{goal}', [CoupleGoalController::class, 'destroy']);

Route::resource('couple-goals', CoupleGoalController::class);
