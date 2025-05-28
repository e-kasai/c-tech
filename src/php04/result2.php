<?php
$user_answer = $_POST['answer'] ?? '';
echo "解答者が選んだのは: " . htmlspecialchars($user_answer, ENT_QUOTES, 'UTF-8');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Quiz</title>
</head>

<body>

</body>

</html>