<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Snippet;

class SnippetController extends Controller
{
    public function index()
    {
        $snippets = Snippet::all();
        return view('feed')->with('snippets', $snippets);
    }

    public function create()
    {
        return view('snippet.create');
    }

    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'title'     => 'required',
            'content'   => 'required',
        ]);

        $snippet = new Snippet();
        $snippet->title = $validated_data['title'];
        $snippet->content = $validated_data['content'];
        $snippet->save();

        return redirect("/snippet");
    }
}
