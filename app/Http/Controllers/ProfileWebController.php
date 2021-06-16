<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ProfileWeb;

class ProfileWebController extends Controller
{
    public function index()
    {
        return ProfileWeb::all();
    }

    public function store(Request $request)
    {
        return ProfileWeb::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $profileweb = ProfileWeb::findOrFail($id);
        $profileweb->update($request->all());

        return $profileweb;
    }
}
