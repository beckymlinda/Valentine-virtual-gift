<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CoupleGoal;


    class CoupleGoalController extends Controller
    {
        public function index()
        {
            // Retrieve all goals, including the due_date field
            $goals = CoupleGoal::all();
    
            // You can optionally format the due_date here if needed
            // Example: Formatting the 'due_date' for display (optional)
            $goals->each(function($goal) {
                if ($goal->due_date) {
                    $goal->formatted_due_date = $goal->due_date->format('F j, Y'); // Format to 'Month day, Year'
                } else {
                    $goal->formatted_due_date = 'No Due Date'; // Default text if there's no due date
                }
            });
    
            return view('couple-goals', compact('goals'));
        }
    
        public function store(Request $request)
        {
            $request->validate(['goal' => 'required|string', 'due_date' => 'nullable|date']);
    
            // Create a new goal, including the due_date
            CoupleGoal::create([
                'goal' => $request->goal,
                'due_date' => $request->due_date,  // Store the due_date from the form input
            ]);
    
            return redirect()->back();
        }
    
        public function update(Request $request, CoupleGoal $goal)
        {
            // Update goal completion status
            $goal->update(['is_completed' => $request->has('is_completed')]);
            return response()->json(['success' => true]);
        }
    
        public function destroy(CoupleGoal $goal)
        {
            // Delete the goal
            $goal->delete();
            return response()->json(['success' => true]);
        }
    }
    