<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Icare;

class IcareController extends Controller
{
    public function index()
    {
        return Icare::all();
    }

    public function store(Request $request)
    {
        return Icare::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $icare = Icare::findOrFail($id);
        $icare->update($request->all());

        return $icare;
    }
}
