<?php
include 'connect_db.php';

/* Задача 1
 * Модифицируйте ваш код так, чтобы нельзя
 * было зарегистрировать пользователя
 * с пустым логином или паролем.
 */

/* Задача 2
 * Модифицируйте ваш код так, чтобы логин мог
 * содержать только латинские буквы и цифры.
 * В случае, если это не так,
 * выводите сообщение об этом над формой.
 */

/* Задача 3
 * Модифицируйте ваш код так, чтобы логин был длиной от 4 до 10 символов.
 * В случае, если это не так, выводите сообщение об этом над формой.
 */

/* Задача 4
 * Модифицируйте ваш код так, чтобы пароль был длиной от
 * 6 до 12 символов. В случае, если это не так,
 * выводите сообщение об этом над формой.
 */

/* Задача 5
 * Модифицируйте ваш код так, чтобы, если логин или пароль вбиты некорректно,
 * над соответствующим инпутом выводилось сообщение об этом.
 */

/* Задача 6
 * Спросите у пользователя при регистрации еще и email. Занесите его в базу данных.
 * Выполните проверку емейла на корректность и,
 * если он некорректен, над соответствующим инпутом выведите сообщение об этом.
 */

/* Задача 7
 * Спросите у пользователя при регистрации еще и
 * дату рождения в формате день.месяц.год.
 * Занесите дату в базу данных.
 * Выполните проверку даты на соответствие формату.
 */

/* Задача 8
 * Спросите у пользователя при регистрации еще и страну проживания.
 * Предложите ему выбрать одну из стран с помощью выпадающего списка select.
 */

/*
 * Права доступа на PHP
 */

/* Задача 1
 * Измените код регистрации так, чтобы все добавляемые
 * пользователи получали статус 'user'.
 */

/* Задача 2
 * Вручную поменяйте какому-нибудь пользователю его статус
 * на 'admin'. Авторизуйтесь под этим пользователем.
 */

/*
 * Функция для проверки валидности пароля (символы)
 */
function isValidStr($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);

    return $data;
}

/*
 * Функция для проверки длины строки
 */
function isValidLength ($str, $min, $max) {
    $len = strlen($str);
    if ($len < $min){
        return "Логин слишком короткий, минимум должно быть $min символов ($max максимум)";
    }
    else if ($len > $max) {
        return "Логин слишком длинный, максимум $max символов ($min минимум)";
    }
    return TRUE;
}


/*
 * Проверка на отсутсвие пустого логина или пароля
 */
if (!empty($_POST['login']) and !empty($_POST['password'])) {
    $isValid = true;
    $login = isValidStr($_POST['login']);
    $password = password_hash(isValidStr($_POST['password']), PASSWORD_DEFAULT);
    $confirm = isValidStr($_POST['confirm']);
    $birthday = isValidStr($_POST['birthday']);
    $email = isValidStr($_POST['email']);
    $country = $_POST['country'];
}
else {
    echo 'Введите логин или пароль!';
}

/*
 * Проверка логина на занятость
 */
$query = "SELECT * FROM users WHERE login='$login'";
$user = mysqli_fetch_assoc(mysqli_query($link,$query));

/*
 * При регистрации автоматически группа доступа будет $user
 */
if (empty($user)) {
    $query = "INSERT INTO users
        SET status='user', login='$login', password='$password',
        birthday='$birthday', email='$email', country='$country'";
    mysqli_query($link,$query);
} else {
    echo 'Логин уже занят!';
}

if (!empty($user)){
    $hash = $user['password'];
    if (password_verify($_POST['password'], $hash)){
        echo 'Welcome';
    }
} else {
    echo 'Wrong pass';
}

/*
 * auth
 */
$_SESSION['auth'] = true;

$id = mysqli_insert_id($link);
$_SESSION['id'] = $id; // id в сессию

/*
 * Длина пароля
 */
$isLengthPass = strlen($password);

?>
<form action="" method="POST">
    <h2>Auth</h2>

    <?php
    if (preg_match("#[^A-Za-z0-9]#", $login)):
        echo 'Логин должен содержать только латинские буквы или цифры';
    else :
        $login = isValidLength($_POST['login'],4,10);
    endif; ?>
    <p> login : <input name="login"></p>

    <?php if ($_POST['password'] != $_POST['confirm']): ?>
        <?php echo 'Пароль вбит неккоректно';
    elseif ($isLengthPass < 6 or $isLengthPass > 12):
        echo 'Пароль не соответсвует длине'; endif; ?>
    <p> password : <input name="password" type="password"></p>
    <p> password confirm : <input name="confirm" type="password"></p>
    <p> Birthday : <input name="birthday" type="date"></p>

    <?php
    if (preg_match('/@/', $email)):
        echo 'email введен корректно';
    else:
        echo 'email введен некорректно';
    endif;
    ?>
    <p> E-mail : <input name="email" type="email"></p>

    <select class="form-control" name="country">
        <option value="Выберите из списка" selected>Выберите из списка</option>
        <option value="Австралия">Австралия</option>
        <option value="Австрия">Австрия</option>
        <option value="Азербайджан">Азербайджан</option>
        <option value="Албания">Албания</option>
        <option value="Алжир">Алжир</option>
    </select>
    <p> submit <input type="submit"> <p>
</form>


© 2020 Josh Goebel
Powered by Node.js, Express, Highlight.js, and Love.