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
  public function edit($diaries){
    $diaries = Diary::find($diaries);
    return view('diaries.edit', compact('diaries'));
  }
  

  public function update(Request $request, Diary $diarie)
    {
      $validated = $request->validate([
        'title' => 'required|string|max:255',  // "content" ir obligāts, tam jābūt tekstam (string) un maksimālais garums 255
        'body' => 'boolean',  // "completed" ir jābūt boolean tipa vērtībai (true/false)
        'date' => 'date',
    ]);

      $diarie->title = $validated["title"];
      $diarie->body = $validated["body"];
      $diarie->date = $validated["date"];

      $diarie->save();
      return redirect("/diaries");

      } 
      public function destroy( Diary $diarie){
        $diarie->delete();
        return redirect("/diaries");
      }
      
}

