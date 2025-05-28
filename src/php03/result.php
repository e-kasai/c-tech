<?php
require_once(__DIR__ . '/functions/search_city_time.php');
$user_selected_city = htmlspecialchars($_GET['city'], ENT_QUOTES, 'UTF-8');
$result_tokyo = searchCityTime("tokyo", $cities);
$result_selected = searchCityTime($user_selected_city, $cities);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/result.css">
    <link rel="stylesheet" href="css/common.css">
    <title>World Clock</title>
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php03/index.php">World Clock</a>
        </div>
    </header>
    <main>
        <div class="card-container">
            <div class="result-card">
                <div class="image-box">
                    <img src="img/<?php echo $result_tokyo["img"]; ?>">
                </div>
                <div class="result-text">
                    <p class="result__body-city"><?php echo $result_tokyo["name"]; ?></p>
                    <p class="result__body-time"><?php echo $result_tokyo["date_time"]; ?></p>
                </div>
            </div>
            <div class="result-card">
                <div class="image-box">
                    <img src="img/<?php echo $result_selected["img"]; ?>">
                </div>
                <div class="result-text">
                    <p class="result__body-city"><?php echo $result_selected["name"]; ?></p>
                    <p class="result__body-time"><?php echo $result_selected["date_time"]; ?></p>
                </div>
            </div>
    </main>
</body>

</html>