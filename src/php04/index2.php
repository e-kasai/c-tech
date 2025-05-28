<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Quiz</title>
    <link rel="stylesheet" href="css/index2.css">
</head>

<body>
    <form class="quiz-form" action="result2.php" method="post">
        <div class="quiz-form__items">
            <div class="quiz-form__item">
                <input type="radio" name="answer" id="optionA" value="200">
                <label class="quiz-form__label" for="optionA">OptionA</label>
            </div>

            <div class="quiz-form__item">
                <input type="radio" name="answer" id="optionB" value="100">
                <label class="quiz-form__label" for="optionB">OptionB</label>
            </div>

            <div class="quiz-form__item">
                <input type="radio" name="answer" id="optionC" value="400">
                <label class="quiz-form__label" for="optionC">OptionC</label>
            </div>

            <div class="quiz-form__item">
                <input type="radio" name="answer" id="optionD" value="600">
                <label class="quiz-form__label" for="optionD">OptionD</label>
            </div>

            <div class="quiz-form__button">
                <button class="quiz-form__button-submit" type="submit">送信</button>
            </div>
        </div>
    </form>
</body>

</html>