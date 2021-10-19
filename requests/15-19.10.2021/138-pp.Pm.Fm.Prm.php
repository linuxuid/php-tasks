<?php
/*
 * Практика по написанию простых скриптов PHP
 */

/* Задача 1
 * Напишите скрипт, который будет преобразовывать температуру
 * из градусов Цельсия в градусы Фарингейта. Для этого сделайте инпут и кнопку
 */
if (isset($_GET['celsius'])):
    $c = $_GET['celsius'];
    $f = ($c * 9/5) + 32;
    echo "$c Celsius is " . $f . " Fahrenheit ";
endif;
?>

<pre>
<form action="" method="GET">
    Celsius to Fahrenheit:
    <input type="text" name="celsius">
    <input type="submit" name="Fahrenheit">
</form>
</pre>


<?php
/*
 * Задача 2
 * Напишите скрипт, который будет считать факториал числа. Само число
 * вводится в инпут и после нажатия на кнопку пользователь должен увидеть результат.
 */
if (isset($_GET['factorial'])):
    $n = $_GET['factorial'];
    $factorial = 1;
    for($i=1; $i<=$n; $i++){
        $factorial *= $i;
    }
    echo $factorial;
    endif;
?>

<pre>
<form action="" method="GET">
    <input type="text" name="factorial">
    <input type="submit" value="вычислить">
</form>
</pre>

<?php
/*
 * Задача 3
 * Дан инпут и кнопка. В инпут вводится число. По нажатию на кнопку выведите список делителей этого числа.
 */
if (isset($_GET['devide'])){
    $n = $_GET['devide'];
    for ($i=1; $i<=$n; $i++) {
        if ($n % $i == 0) {
            echo $i . ' ';
        }
    }
}
?>

<pre>
<form action="" method="GET">
    <input type="text" name="devide">
    <input type="submit">
</form>
</pre

<?php
/*
 * Задача 4
 * Даны 2 инпута и кнопка. В инпуты вводятся числа.
 * По нажатию на кнопку выведите список общих делителей этих двух чисел.
 */
if (isset($_GET['first']) and isset($_GET['second'])) {
    $firstNum = getDivisors($_GET['first']);
    $secondNum = getDivisors($_GET['second']);

    var_dump(array_intersect($firstNum,$secondNum));
}

function getDivisors($num) {
    $res = [];

    for ($i=1; $i<=$num;$i++) {
        if ($num % $i == 0) {
            $res[] = $i;
        }
    }
    return $res;
}


?>
<pre>
<form action="" method="GET">
    <input type="text" name="first">
    <input type="text" name="second">
    <input type="submit">
</form>
</pre>

<?php
/*
 * Задача 5
 * Напишите скрипт, который будет находить корни квадратного уравнения.
 * Для этого сделайте 3 инпута, в которые будут вводиться коэффициенты уравнения.
 */
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

if ($a == 0) {
    echo 'Это не квадратное уравнение';
} else {
    $d = $b* $b-4* $a* $c;
    if ($d<0) {
        echo 'Решений нет, посколько D<0';
    } else {
        $d = sqrt($d);
        $x1 = (($b)+$d)/(2*$a);
        $x2 = (($b)-$d)/(2*$a);
        echo 'x1=' . $x1 . ' x2=' . $x2;
    }
}
?>
<pre>
<form method="POST">
    <label>First coefficient : <input type="text" name="a"></label>

    <label>Second coefficient : <input type="text" name="b"></label>

    <label>Three coefficient : <input type="text" name="c"></label>
    <input type="submit" name="send">
</form>
</pre>

<?php
/*
 * Задача 6
 * Даны 3 инпута. В них вводятся числа. Проверьте, что эти числа являются тройкой Пифагора:
 * квадрат самого большого числа должен быть равен сумме квадратов двух остальных.
 */
if(isset($_GET)):
    /*
     * x2 + y2 = z2
     */
    $x = pow($_GET['x2'],2);
    $y = pow($_GET['y2'],2);
    $c = pow($_GET['z2'],2);

    if ($x + $y == $c) {
        echo 'yes';
    } else {
        echo 'no';
    }
    endif;
?>
<pre>
<form action="" method="GET">
    <label> First num : <input name="x2"> </label>
    <label> Second num : <input name="y2"> </label>
    <label> Three num : <input name="z2"> </label>
    <input type="submit">
</form>
</pre>

<?php
/*
 * Задача 7
 * Дан инпут и кнопка. В этот инпут вводится дата рождения в формате '01.12.1990'.
 * По нажатию на кнопку выведите на экран сколько дней осталось до дня рождения пользователя.
 */
if (isset($_POST['data'])) {
    $date = time(); // настоящее время
    $bbDate = strtotime($_POST['data']); // дата введенная юзером

    $daysLeft = $bbDate - $date;
    echo floor($daysLeft/(60*60*24)); // 1 день = 86400 сек
}
?>
<form method="POST">
    <label><input name="data"></label>
    <label> : <input type="submit"></label>
</form>
<?php
/*
 * Задача 8
 * Дан текстареа и кнопка. В текстареа вводится текст.
 * По нажатию на кнопку выведите количество слов и количество символов в тексте.
 */
if (isset($_POST['comment'])):
    $comment = $_POST['comment'];
    echo $comment . "<br>";
    echo "Кколичество знаков : " . strlen($_POST['comment']);
    endif;
?>
<h2>one</h2>
<form method="POST">
    <textarea name="comment"></textarea>
    <input type="submit">
</form>

<?php
/*
 * Задача 9
 * Дан текстареа и кнопка. В текстареа вводится текст.
 * По нажатию на кнопку нужно посчитать процентное содержание каждого символа в тексте.
 */
if (isset($_GET['user'])) {
    $a = $_GET['user'];
    foreach(count_chars($a) as $key => $value) {
      //  echo chr($key) . 'Символ встречает в строке раз : '. $value . "<br>";
    }
}
?>
<h2>two</h2>
<form method="GET">
    <textarea name="user"></textarea>
    <input type="submit">
</form>

<?php
/*
 * Задача 10
 * Даны 3 селекта и кнопка. Первый селект - это дни от 1 до 31,
 * второй селект - это месяцы от января до декабря,
 * а третий - это годы от 1990 до 2025. С помощью этих селектов можно выбрать дату.
 * По нажатию на кнопку выведите на экран день недели, соответствующий этой дате.
 */
$d = range(1,31);
$m = range(1,12);
$y = range(2020,2025);

function selectD($arr,$a,$sel){

    echo '<a>'. $a .'</a>'; // День месяц и год
    echo '<select name="'. $sel . '">';
    foreach ($arr as $value) {
        echo '<option value="'.$value.'">'. $value.'</option>';
    }
    echo '</select>';
}

if (!isset($_POST['sub'])) {
    ?>
    <form action="" method="POST">
        <p>Выберете дату: </p>
        <?php selectD($d,'День',"day[]");

        selectD($m,'Месяц',"month[]");

        selectD($y,'Год',"year[]"); ?>

        <input type="submit" name="sub">
    </form>
<?php }else{
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $week = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'];
    $x = date('w', mktime(0,0,0,$month[0],$day[0],$year[0]));
    print_r($week[$x]);} ?>

<?php
/*
 * Задача 11
 * Сделайте скрипт-гороскоп. Внутри него хранится массив гороскопов на несколько дней вперед для каждого
 * знака зодиака. По заходу на страницу спросите у пользователя дату рождения,
 * определите его знак зодиака и выведите предсказание для этого знака зодиака на текущий день.
 */
if (!empty($_REQUEST['submit'])) {
    $birthDay = $_REQUEST['birthday'];
    $myDate = str_replace('-', '', (substr_replace($birthDay, '', '0', '4')));
    echo $myDate;
    $horoscopeDisc = [
        4 => 'Сегодня вы можете запутаться в собственных чувствах. Явление весьма широко распространенное, 
 но каждый раз воспринимается почти как конец света. Пусть вашими действиями руководит сила привычки - уж она-то никогда не откажет.',
        5 => 'Благодаря затраченным усилиям на работе и благодаря тому, что вы уже много времени показываете себя только как 
 ценного и незаменимого сотрудника, вам может выпасть уникальный шанс. Ваше начальство решит, что именно вы достойны получения некого весьма привлекательного бонуса.',
        6 => 'Сегодня вам захочется что-то срочно изменить либо в себе и своем облике, либо в укладе своего мира. Что ж, коль вы чувствуете
 к этому желание, и у вас есть ещё достаточное количество сил, приступайте к экспериментам. Очень возможно, что эти изменения понесут за собой ещё более глубокие перемены.'
    ];
    $now = substr_replace($myDate,'','0','2');
    echo $now;
    echo "<br>";
    $horoscopeName = ['Водолей', 'Рыбы', 'Овен', 'Телец', 'Близнецы', 'Рак', 'Лев', 'Дева', 'Весы', 'Скорпион', 'Стрелец', 'Козерог', 'Козерог'];
    $horoscopeOt = ['0120','0219','0321','0421','0521','0622','0723','0823','0923','1024','1123','1222','0101'];
    $horoscopeDo = ['0218','0320','0420','0520','0621','0722','0822','0922','1023','1122','1221','1231','0119'];

    for ($i=0; $i<13; $i++) {
        if ($myDate > $horoscopeOt[$i] && $myDate < $horoscopeDo[$i]){
            echo $horoscopeName[$i];
            echo "<br>";
            echo $horoscopeDisc;
        }
    }
}
?>

<form method="GET">
    <input type="date" name="birthday">
    <input type="submit" name="submit">
</form>
