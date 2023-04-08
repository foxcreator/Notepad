<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoteRequest;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class HomeController extends Controller
{
    public function index()
    {
        $data = new Note();
        $data = $data->all();
        return view('index', compact('data'));
    }

    public function createForm()
    {
        return view('createform');
    }

    public function createNote(NoteRequest $request)
    {
        $note = new Note();
        $note->title = $request->title;
        $note->description = $request->description;
        $note->save();

        return redirect('/');
    }

    public function showOneNote($id)
    {
        $data = new Note();
        $noteId = $data->find($id);
        return view('notecart', compact('noteId'));
    }

    public function updateNote($id, NoteRequest $request)
    {
        $note = Note::find($id);
        $note->title = $request->title;
        $note->description = $request->description;
        $note->save();

        return redirect('/')->with('status', 'Note' . $note->title . 'was Updated');
    }

    public function deleteNote($id)
    {
        Note::find($id)->delete();
        return redirect('/');
    }
}
