<?php
/**
 * Variant 2 Index Page
 * Shows task cards for Variant 2
 */

require_once dirname(__DIR__, 3) . '/shared/templates/task_cards.php';
require_once dirname(__DIR__, 3) . '/shared/helpers/paths.php';

// Check if came from a variant
$fromVariant = $_GET['from'] ?? null;
$variantUrl = null;
if ($fromVariant && preg_match('/^v\d+$/', $fromVariant)) {
    $variantUrl = "/lr1/variants/{$fromVariant}/index.php";
}

// Add ?from= parameter to task URLs
$fromParam = $fromVariant ? '?from=' . htmlspecialchars($fromVariant) : '';

$tasks = [
    "task2.php{$fromParam}" => ['name' => 'Завдання 2'],
    "task3.php{$fromParam}" => ['name' => 'Завдання 3'],
    "task4.php{$fromParam}" => ['name' => 'Завдання 4'],
    "task5.php{$fromParam}" => ['name' => 'Завдання 5'],
    "task6.php{$fromParam}" => ['name' => 'Завдання 6'],
];
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Варіант 2 — ЛР1</title>
    <link rel="stylesheet" href="<?= webPath(dirname(__DIR__, 2) . '/shared/css/base.css') ?>">
    <link rel="stylesheet" href="../demo/demo.css">
</head>
<body class="index-page">
    <header class="header-fixed">
        <div class="header-left">
            <a href="/" class="header-btn">Головна</a>
            <?php if ($variantUrl): ?>
            <a href="<?= htmlspecialchars($variantUrl) ?>" class="header-btn header-btn-variant">← Варіант <?= htmlspecialchars(substr($fromVariant, 1)) ?></a>
            <?php endif; ?>
        </div>
        <div class="header-center"></div>
        <div class="header-right">
            Варіант 2
        </div>
    </header>

    <h1 class="index-title">
        Варіант 2
        <br><span class="index-subtitle">Завдання для виконання</span>
    </h1>

    <?= renderTaskCards($tasks, false, '') ?>
</body>
</html>