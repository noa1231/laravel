<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    public function index()
    {
        $items = Test::all();
        return view('index', ['items' => $items]);
    }
    public function thanks(Request $request)
    {
        $form = $request->all();
        Test::create($form);
        return view('thanks');
    }
}
