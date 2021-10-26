<?php
function dayOfWeeks(){
    /*
     * Массив дней недели
     */
$weeks = [
    'Понедельник',
    'Вторник',
    'Среда',
    'Четверг',
    'Пятница',
    'Суббота',
    'Воскресенье'
];
?>
<form>
<select>
    <option selected>Выбрать из списка</option>
    <?php foreach ($weeks as $days) { ?>
    <?php echo "<option>$days</option>";
    }
?>
</select>
</form>

<?php
} ?>

<?php
dayOfWeeks();

