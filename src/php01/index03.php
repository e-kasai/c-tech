<?php

$scores = [
    'Taro' => 80,
    'Jiro' => 65,
    'Hanako' => 90,
    'Saburo' => 58
];

foreach ($scores as $key => $score) {
    if ($score >= 70) {
        echo "{$key}さんは、{$score}点なので合格です。 <br/>";
    } else {
        continue;
    }
}
