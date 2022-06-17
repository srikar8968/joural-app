<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Editor;

class EditorController extends Controller
{
    public function index() {
        $editors = Editor::where('status', 1)->latest()->paginate(12);
        
        return view('editors.list', compact('editors'));
    }
}
