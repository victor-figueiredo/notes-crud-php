<?php

namespace App\Http\Controllers;

use App\Models\note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    // O laravel padroniza as actions dos controllers
    // consultar documentação para ver os padrões
    public function index()
    {
        $notes = note::all();
        return view('notes.index', ['notes' => $notes]);
    }
    public function create()
    {
        return view('notes.create');
    }
    public function store(Request $request)
    {
        if ($request->has('isFavorite')) {
            $isFavorite = $request->input('isFavorite') ? 1 : 0;
            $request->merge(['isFavorite' => $isFavorite]);
        }
        note::create($request->all());
        return redirect()->route('notes-index');
    }
    public function edit($id)
    {
        $note = note::where('id', $id)->first();
        if(!empty($note)){
            return view('notes.edit', ['note' => $note]);
        }else{
            return redirect()->route('notes-index');
        }
    }
    public function update(Request $request, $id)
    {
        $data = [
            'title' => $request->title,
            'content' => $request->content,
            'color' => $request->color,
            'isFavorite' => $request->isFavorite ? 1 : 0
        ];
        // if ($data['isFavorite']->has('isFavorite')) {
        //     $isFavorite = $data['isFavorite']->input('isFavorite') ? 1 : 0;
        //     $data['isFavorite']->merge(['isFavorite' => $isFavorite]);
        // }
        note::where('id', $id)->update($data);
        return redirect()->route('notes-index');
    }
    public function destroy($id)
    {
        note::where('id', $id)->first()->delete();
        return redirect()->route('notes-index');
    }
}
