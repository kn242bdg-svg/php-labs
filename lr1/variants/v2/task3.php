<?php
require_once __DIR__ . '/layout.php';

function convertUahToUsd(float $uah, float $rate): float
{
    return round($uah / $rate, 2);
}

$uah = 8700;
$rate = 43.86;

$usd = convertUahToUsd($uah, $rate);

$content = '<div class="card">
    <h2>💵 Конвертер валют</h2>
    <p><strong>Курс:</strong> 1 долар = ' . $rate . ' грн</p>
    <div class="result">' . $uah . ' грн. можна обміняти на ' . $usd . ' долар</div>
</div>';

renderVariantLayout($content, 'Завдання 2', 'task3-body');