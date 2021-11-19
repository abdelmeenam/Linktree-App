<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LinkController extends Controller
{
    public function index()
    {
        $links = Link::where('user_id', Auth::id())->get();

        return view('links.index', ['links' => $links]);
    }

    public function create()
    {
        return view('links.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|max:255',
            'link' => 'required|url'
        ]);

        $link = link::create([
            'user_id' => Auth::id(),
            'name'  => $request->input('name'),
            'link' => $request->input('link')
        ]);
        // $links = Auth::user()->links()->create($request->only(['name', 'link']));


        if ($link) {
            return redirect()->to('/dashboard/links');
        }
        return redirect()->back();
    }

    public function edit(Link $link)
    {
        if ($link->user_id !== Auth::id()) {
            return abort(404);
        }
        return view('links.edit', [
            'link' => $link
        ]);
    }

    public function update(Link $link, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'link' => 'required|url'
        ]);

        $link->update($request->only(['name', 'link']));
        return redirect()->to('/dashboard/links');
    }

    public function destroy(Link $link, Request $request)
    {
        $link->delete();
        return redirect()->to('/dashboard/links');
    }
}
