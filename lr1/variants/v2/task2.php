<?php
/**
 * Завдання 1: Форматований текст
 *
 * Вірш про художника з форматуванням: <b>, <i>, margin-left
 */
require_once __DIR__ . '/layout.php';

ob_start();
?>
<div class="poem">
    <?php
    echo "<p class='poem-indent-1'>Над полем <b>вітер</b> тихо лине,</p>";
    echo "<p class='poem-indent-1'>Колоски хитає <i>золотий</i> прибій,</p>";
    echo "<p class='poem-indent-1'>Хмарки пливуть немов перини,</p>";
    echo "<p class='poem-indent-1'>А літо дарує спокій свій.</p>";
    ?>
</div>
<?php
$content = ob_get_clean();

renderVariantLayout($content, 'Завдання 1', 'task2-body');
