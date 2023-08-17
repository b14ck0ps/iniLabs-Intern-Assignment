<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Inertia\Inertia;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    function index()
    {
        $todos = Todo::orderBy('created_at', 'desc')->get();

        return Inertia::render('home', [
            'todos' => $todos
        ]);
    }

    function store(Request $request)
    {
        $request->validate([
            'task' => 'required'
        ]);

        $todo = new Todo();
        $todo->task = $request->task;
        $todo->save();
    }

    function update(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'completed' => 'required'
        ]);

        $todo = Todo::find($request->id);
        $todo->completed = $request->completed;
        $todo->save();
    }

    function destroy(Request $id)
    {
        $todo = Todo::find($id->id);
        $todo->delete();
    }
}
