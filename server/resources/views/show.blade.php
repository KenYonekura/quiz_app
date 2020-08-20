<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=VT323&display=swap" rel="stylesheet">
    <title>Quiz</title>
    <link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
</head>

<body>
    <div class="main">
        <div class="site-logo">
            QUIZ APPLICATION
        </div>
        <div class="question-title">
            <!-- <?php
            $a = $times + 1; //$timesの初期値は0だから､+1にしておく
            echo "Question", "$a";
            ?> -->
        </div>
        <div class="question-instruction">
            <!-- <?php
            echo $arr[$times][0]; //ここでの[0]には$questionに格納されているお題が来る｡配列でいう0番
            ?> -->
        </div>
        <div class="question-box">
            <form method="POST" class="form" action="quiz_result.php">

                <div class="question-box-left">
                    <div class="question-number1">①</div>
                    <div class="question-text"><?php echo $response_left; ?>
                        <input id="check-a" type="radio" name="response" value="left" checked><label for="check-a"></label>
                    </div>
                    <div class="question-image"><?php echo '<img src="./upload/' . $pic1['name'] . '">'; ?></div>
                </div>

                <div class="question-box-left45">
                    <div class="question-number2">②</div>
                    <div class="question-text"><?php echo $response_left45; ?>
                        <input id="check-b" type="radio" name="response" value="left45"><label for="check-b"></label>
                    </div>
                    <div class="question-image"><?php echo '<img src="./upload/' . $pic2['name'] . '">'; ?></div>
                </div>

                <div class="question-box-right45">
                    <div class="question-number3">③</div>
                    <div class="question-text"><?php echo $response_right45; ?>
                        <input id="check-c" type="radio" name="response" value="right45"><label for="check-c"></label>
                    </div>
                    <div class="question-image"><?php echo '<img src="./upload/' . $pic3['name'] . '">'; ?></div>
                </div>

                <div class="question-box-right">
                    <div class="question-number4">④</div>
                    <div class="question-text"><?php echo $response_right; ?>
                        <input id="check-d" type="radio" name="response" value="right"><label for="check-d"></label>
                    </div>
                    <div class="question-image"><?php echo '<img src="./upload/' . $pic4['name'] . '">'; ?></div>
                </div>
                <br>
                <div class="button">
                    <input type="hidden" name="times" value=<?php echo $times; ?>>
                    <input type="hidden" name="num_correct" value=<?php echo $num_correct; ?>>
                    <input id="send_button" type="submit" value="Decide" style="background-color: #F7DA0C">
                </div>
            </form>
        </div>
    </div>
</body>

</html>