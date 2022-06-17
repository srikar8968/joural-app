<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meta;
use App\Models\Journal;
use App\Models\Category;

class JournalController extends Controller
{
    public function index() {
        $journals = Journal::where('status', 1)->latest('sku')->paginate(10);
        
        return view('journals.list', compact('journals'));
    }

    public function category(Category $category) {
        $journals = $category->journals()->where('status', 1)->latest('sku')->paginate(10);

        return view('journals.category', compact('journals', 'category'));
    }

    public function search(Request $request) {
        $search = $request->input('query');

        if(empty($search))
            abort(404);

        $journals = Journal::where('title', 'LIKE', "%{$search}%")->orWhere('sku', 'LIKE', "%{$search}%")->paginate(10);

        return view('journals.list', compact('journals'));
    }
}
