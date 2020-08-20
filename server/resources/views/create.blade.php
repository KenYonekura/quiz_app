<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=VT323&display=swap" rel="stylesheet">
    <title>選択問題</title>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
</head>

<body>
    <div class="main">
        <div class="site-logo">
            QUIZ APPLICATION
        </div>
        <div class="make">
            問題文を作成してください
        </div>
        <p>問題をまた作成する場合は｢Again｣,問題を解く場合は｢End｣を押してください</p>
        <div class="question-form">
            <form method="POST" class="form" action="/quizzes" enctype="multipart/form-data">
                @csrf
                    <label for=" mondai">問題文:</label>
                    <textarea name="title" rows="5" cols="150" value="{{ old('title') }}"></textarea>
                    <div>
                        <label for="choice1"></label>
                        選択肢1：<input type="text" name="q1" value="{{ old('q1') }}" size="40">
                    </div>
                    <div>
                        <label for="choice2"></label>
                        選択肢2：<input type="text" name="q2" value="{{ old('q2') }}" size="40">
                    </div>
                    <div>
                        <label for="choice3"></label>
                        選択肢3：<input type="text" name="q3" value="{{ old('q3') }}" size="40">
                    </div>
                    <div>
                        <label for="Choice4"></label>
                        選択肢4：<input type="text" name="q4" value="{{ old('q4') }}" size="40">
                    </div>
                    <div>
                        <label for="choice-pic1"></label>
                        選択肢画像1：<input type="file" name="pic1" value="{{ old('pic1') }}">
                    </div>
                    <div>
                        <label for="choice-pic2"></label>
                        選択肢画像2：<input type="file" name="pic2" value="{{ old('pic2') }}">
                    </div>
                    <div>
                        <label for="choice-pic3"></label>
                        選択肢画像3：<input type="file" name="pic3" value="{{ old('pic3') }}">
                    </div>
                    <div>
                        <label for="choicep-pic4"></label>
                        選択肢画像4：<input type="file" name="pic4" value="{{ old('pic4') }}">
                    </div>
                    <div class="button">
                        <input id="send_button" type="submit" value="Again" name="again" style="background-color: #F7DA0C"><!-- submitで入力された全てのデータを引き連れて<form>で指定したページへ飛ぶためのボタン -->
                        <input id="send_button" type="submit" value="End" action="end" style="background-color: #F7DA0C">
                    </div>
                </form>
        </div>
    </div>
</body>

</html>
<!-- http://localhost/quiz/index.html -->