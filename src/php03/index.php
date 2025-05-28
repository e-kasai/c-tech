<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World CLock</title>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/sanitize.css">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php03/index.php">World Clock</a>
        </div>
    </header>

    <main>
        <form class="search-form" action="result.php" method="get">
            <div class="search-form__title">
                <h2 class="search-from__title-text">日本と世界の時間を比較</h2>
            </div>
            <div class="search-form__items">
                <div class="search-form__item">
                    <label class="visually-hidden" for="select_city">choose country</label>
                    <select class="search-form__item-select" id="select_city" name="city">
                        <option value="tokyo">Tokyo</option>
                        <option value="newyork">NewYork</option>
                        <option value="london">London</option>
                    </select>
                </div>
                <div class="search-form__btn">
                    <button class="search-form__btn-submit" type="submit">検索</button>
                </div>
            </div>
        </form>
    </main>


</body>

</html>