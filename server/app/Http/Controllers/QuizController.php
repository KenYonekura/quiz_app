<?php

namespace App\Http\Controllers;

use App\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    //showページへ移動
    public function index()
    {
        return view('index'); //blade.phpは省略可能
    }
}
