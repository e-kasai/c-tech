<!DOCTYPE html>
<html lang="en">

<!-- 最初に表示される画面（都市を選んで検索するフォーム）のファイルです -->


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="/php02/css/sanitize.css">
    <link rel="stylesheet" href="/php02/css/common.css">
    <link rel="stylesheet" href="/php02/css/index.css">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php02/index.php">World Clock</a>
        </div>
    </header>

    <main class="main">

        <div class="search-form__title">
            <h2 class="content-title">日本と世界の時間を比較</h2>
        </div>

        <form class="search-form__wrapper" action="result.php" method="get">
            <div class="search-form__item">
                <select class="search-form__item-select" name="city">
                    <option value="シドニー">シドニー</option>
                    <option value="上海">上海</option>
                    <option value="モスクワ">モスクワ</option>
                    <option value="ロンドン">ロンドン</option>
                    <option value="ヨハネスブルグ">ヨハネスブルグ</option>
                    <option value="ニューヨーク">ニューヨーク</option>
                </select>
            </div>
            <div class="search-form__button">
                <button class="search-form__button-submit" type="submit">検索</button>
            </div>
        </form>
    </main>


</body>

</html>