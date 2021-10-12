<?php
/*
 * Условия и разрыв PHP кода
 */

/* Задача 1
 * Дана переменная: $show = true;
 * Выведите приведенный HTML код, если переменная show равна true.
 */

$show = true;
?>

<!--begin php code-->
<?php if($show): ?>
<div>
	<p>text1</p>
	<p>text2</p>
	<p>text3</p>
</div>
<?php endif; ?>
<!--end php code -->

<?php
/* Задача 2
 * Дана переменная: $show = true;
 * Выведите первый див, если переменная show равна true,
 * и второй див, если переменная равна false.
 */
$show = false;
?>

<!--begin php code-->
<?php if($show):?>
    <div>
        <p>text+</p>
        <p>text+</p>
        <p>text+</p>
    </div>
<?php else: ?>
    <div>
        <p>text-</p>
        <p>text-</p>
        <p>text-</p>
    </div>
<?php endif; ?>
<!--end php code-->

<?php
/* Задача 3
 * Даны дивы:
 * Сделайте условие, которое будет показывать один из дивов.
 */
$var = 'text2';
?>

<!--begin php code-->
<?php if($var == 'text1'): ?>
<div>
    <p>text1</p>
    <p>text1</p>
    <p>text1</p>
</div>
<?php elseif($var == 'text2'): ?>
<div>
    <p>text2</p>
    <p>text2</p>
    <p>text2</p>
</div>
<?php else: ?>
<div>
    <p>text-</p>
    <p>text-</p>
    <p>text-</p>
</div>
<?php endif; ?>
<!--begin php code-->