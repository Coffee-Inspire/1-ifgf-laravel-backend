<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\About;
use DB;

class AboutController extends Controller
{
    public function index()
    {
        return About::all();
    }

    public function store(Request $request)
    {
        return About::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $about = About::findOrFail($id);
        $about->update($request->all());

        return $about;
    }

    public function delete(Request $request, $id)
    {
        $about = About::findOrFail($id);
        $about->delete();

        return 204;
    }

    public function getNextUserID() 
    {
        $statement = DB::select("show table status like 'abouts'");

        return response()->json(['nextId' => $statement[0]->Auto_increment]);
    }
}
