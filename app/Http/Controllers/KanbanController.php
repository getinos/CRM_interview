<?php

namespace App\Http\Controllers;

use App\Models\Stage;
use App\Models\Project;
use Illuminate\Http\Request;

class KanbanController extends Controller
{
    public function addStage(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Create a new stage
        $stage = new Stage();
        $stage->name = $request->input('name');
        $stage->order = Stage::max('order') + 1; // put it at the end
        $stage->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Stage added successfully!');
    }

    public function stageSettings()
{
    $stages = Stage::all();
    return view('mainui', compact('stages'));
}

public function deleteStage($id)
{
    $stage = Stage::findOrFail($id);
    $stage->delete();

    return redirect()->back()->with('success', 'Stage removed successfully!');
}



public function addProject(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:20',
        'email' => 'required|email|max:255',
        'stage_id' => 'required|exists:stages,id',
    ]);

    Project::create($request->all());

    return redirect()->back()->with('success', 'Project added successfully!');
}

public function kanbanBoard()
{
    // Fetch all stages with their related projects
    $stages = Stage::with('projects')->orderBy('order')->get();

    return view('kanban.board', compact('stages'));
}



}
