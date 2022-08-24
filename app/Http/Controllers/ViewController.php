<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function kontak(UpdatemyModelRequest $request, $id)
    {
        return view('update', [
            "title" => $id
        ]);
    }
}
