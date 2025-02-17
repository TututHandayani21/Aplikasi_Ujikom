<?php

namespace App\Http\Controllers;

use App\Models\TaskList;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskListController extends Controller
{
    public function show($id) {
        $list = TaskList::findOrFail($id);
    
        $data = [
            'title' => $list->name,
            'lists' => TaskList::all(),
            'list' => $list,
            'tasks' => $list->tasks
        ];
    
        return view('pages.details', $data);
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|max:100'
        ]);

        TaskList::create([
            'name' => $request->name
        ]);

        return redirect()->back();
    }

    public function destroy($id) {
        TaskList::findOrFail($id)->delete();

        return redirect()->back();
    }
}