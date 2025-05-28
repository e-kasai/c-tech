<?php
require_once(__DIR__ . '/../config/cities.php');
function searchCityTime($user_selected_city, $cities)
{

    foreach ($cities as $city) {
        if ($city["name"] === $user_selected_city) {
            $current_time = new DateTime('now', new DateTimeZone($city["time_zone"]));
            $city['date_time'] = $current_time->format('H:i');
            return $city;
        }
    }
    return null;
}
