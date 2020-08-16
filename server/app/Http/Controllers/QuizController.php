<?php

namespace App\Http\Controllers;

use App\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    //indexページへ移動
    public function index()
    {
        return view('index'); //blade.phpは省略可能
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        //
    }
}
