<?php

namespace App\Http\Controllers;
use App\Models\Diary;
use Illuminate\Http\Request;

class DiaryController extends Controller
{
    public function index()
    {
        $diaries = Diary::all();
        return view("diaries.index", compact("diaries"));
    }
    public function show(Diary $diarie) {
        return view("diaries.show", compact("diarie"));
              
      }

      public function create()
  {
      return view('diaries.create'); 
  }

  public function store(Request $request)
  {
    $validated = $request->validate([
        "title" => "required|max:255",
        'body' => 'required|string',
        'date' => 'required|DATE',
      ]);
    Diary::create([
        "title" => $request->title,
        "body" => $request->body,
        "date" => $request->date,
        //"completed" => false
      ]);
      return redirect("/diaries");
  
  }
}

