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
        // インスタンスの作成
        $quiz = new Quiz;

        // 値の用意
        $quiz->title = $request->title;
        $quiz->q1 = $request->q1;
        $quiz->q2 = $request->q2;
        $quiz->q3 = $request->q3;
        $quiz->q4 = $request->q4;
        //ファイルにimageをパスして画像ファイルを生成し、sorage/public/imageのに格納、$filenameに渡す
        $filename = $request->file('pic1')->store('public/image');
        $filename = $request->file('pic2')->store('public/image');
        $filename = $request->file('pic3')->store('public/image');
        $filename = $request->file('pic4')->store('public/image');
        // imageカラムの中に上で作成されたデータをbasenameメソッドで名前だけ保存
        $quiz->pic1 = basename($filename);
        $quiz->pic2 = basename($filename);
        $quiz->pic3 = basename($filename);
        $quiz->pic4 = basename($filename);
        $quiz->timestamps = false;

        // インスタンスに値を設定して保存
        $quiz->save();

        // 登録したらindexに戻る
        // 登録ボタンがクリックされた場合
        if (isset($_POST['again'])) {
            return redirect('/quizzes/create');
        } else {
            return redirect('/quizzes/show');
        }
    }
}
