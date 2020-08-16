<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=VT323&display=swap" rel="stylesheet">
    <title>選択問題</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="main">
        <div class="site-logo">
            QUIZ APPLICATION
        </div>
        <div class="question-instruction">
            これから4択の問題が出題されます｡<br>
            必ずいずれかの選択肢を選んでください｡
        </div>
        <div class="start-button">
            <a href="{{ action('QuizController@create', $post->id) }}">{{ $post->title }}</a>
            <img src="/storage/image/inv.png" alt="logo">
            </a>
        </div>
    </div>
</body>

</html>