<?php

namespace App\Http\Controllers;
use App\models\ToDo;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    public function index()
    {
        $todos = ToDo::all();
        return view("todos.index", compact("todos"));
    }
    
    public function show(ToDo $todo) {
        return view("todos.show", compact("todo"));
    }
        
    public function create()
    {
        return view('todos.create'); 
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "content" => "required|max:255"
        ]);
        
        ToDo::create([
            "content" => $request->content,
            "completed" => false
        ]);
        
        return redirect("/todos");
    }

    // Fix here: Change "Todo::find($todo)" to "ToDo::find($todo)"
    public function edit($todo)
    {
        $todo = ToDo::find($todo); // Fixed the model name to match the actual ToDo model
        return view('todos.edit', compact('todo'));
    }
  

    public function update(Request $request, ToDo $todo)
    {
        $validated = $request->validate([
            'content' => 'required|string|max:255',  // "content" is required and should be a string with a max length of 255
            'completed' => 'boolean',  // "completed" must be a boolean value (true/false)
        ]);

        $todo->content = $validated["content"];
        $todo->completed = $validated["completed"];

        $todo->save();
        return redirect()->route('todos.index');
    }

    public function destroy(ToDo $todo)
    {
        $todo->delete();
        return redirect("/todos");
    }
}
