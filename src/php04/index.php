<?php
require_once(__DIR__ . '/config/quiz_data.php');
$random_keys = array_rand($quiz_data, 4);

foreach ($random_keys as $key) {
    $options[] = $quiz_data[$key];
}

$answer = $options[array_rand($options, 1)];

//echo '<pre>' . var_export($random_keys, true) . '</pre>';
//echo '<pre>' . var_export($options, true) . '</pre>';
//echo '<pre>' . var_export($answer, true) . '</pre>';




?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Code Quiz</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php04">Status Code Quiz</a>
        </div>
    </header>
    <main>
        <div class="question">
            <p class="question__text">Q. 以下の内容に当てはまるステータスコードを選んでください</p>
            <p class="question__text"><?php echo $answer['description'] ?></p>
        </div>
        <form class="quiz-form" action="result.php" method="post">
            <input type="hidden" name="correct_answer" value="<?php echo $answer['code'] ?>">
            <div class="answer-options">
                <?php foreach ($options as $option): ?>
                    <div class="answer-option">
                        <div class="answer-option-text">
                            <input class="answer-option-textbox" type="radio"
                                id="<?php echo htmlspecialchars($option['code'], ENT_QUOTES, 'UTF-8'); ?>" name="option" value="option_<?php echo htmlspecialchars($option['code'], ENT_QUOTES, 'UTF-8'); ?>"
                                <label for="<?php echo htmlspecialchars($option['code'], ENT_QUOTES, 'UTF-8'); ?>">
                            <?php echo htmlspecialchars($option['code'], ENT_QUOTES, 'UTF-8'); ?>
                            </label>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <!--------- submit btn ----------->
            <button class="submit-btn" type="submit">Submit</button>
            </div>
        </form>
    </main>
</body>

</html>