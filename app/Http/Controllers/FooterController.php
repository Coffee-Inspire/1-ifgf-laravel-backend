<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Footer;

class FooterController extends Controller
{
    public function index()
    {
        return Footer::all();
    }

    public function store(Request $request)
    {
        return Footer::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $footer = Footer::findOrFail($id);
        $footer->update($request->all());

        return $footer;
    }
}
