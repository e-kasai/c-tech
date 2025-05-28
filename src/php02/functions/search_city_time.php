<?php

/* 都市名をもとに都市情報を探し、現在時刻などを返す関数ファイルです*/


/* result.phpファイルから引数を受け取って関数処理を行う*/
/* 受け取った引数によってcities.phpファイル（各国データ）を読み込む */
/* result.phpから受け取った引数(国名)がcities.phpに存在するか調べ一致するものがある時のみif文を実行する(現在時刻を取得する) */

function searchCityTime($city_name)
{
    require('config/cities.php');
    foreach ($cities as $city) {
        if ($city["name"] === $city_name) {
            $date_time = new DateTime("", new DateTimeZone($city["time_zone"]));
            $time = $date_time->format('H:i');
            $city['time'] = $time;

            return $city;
        }
    }
}
