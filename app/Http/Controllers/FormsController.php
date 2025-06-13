<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function bredaLive(Request $request)
    {
        return view('forms.index');
    }
}