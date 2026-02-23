<?php
/**
 * Завдання 2: Форматований текст
 *
 * Демонстрація: echo, HTML-теги, стилі
 */
require_once dirname(__DIR__, 2) . '/demo/layout.php';

ob_start();
?>
<div class="poem">
    <?php
    echo "<p>Над полем <b>вітер</b> тихо лине,</p>";
    echo "<p>Колоски хитає <i>золотий</i> прибій,</p>";
    echo "<p>Хмарки пливуть немов перини,</p>";
    echo "<p>А літо дарує спокій свій.</p>";
    ?>
</div>
<?php
$content = ob_get_clean();

renderDemoLayout($content, 'Завдання 2', 'task2-body');