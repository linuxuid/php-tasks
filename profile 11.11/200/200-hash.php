<?php
include 'connect_db.php';

/* Задача 1
 * Внесите изменения в регистрацию с учетом хеширования,
 * зарегистрируйте пару новых пользователей,
 * убедитесь, что в базу данных они добавились с хешированными паролями.
 */

/* Задача 2
 * Реализуйте описанную выше регистрацию с соленым паролем.
 */

/* Задача 3
 * Переделайте вашу авторизацию и регистрацию на новые изученные функции.
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
    /*
     * Флаг
     */
    $isValid = true;

    /*
     * hash для пароля
     */
    $login = isValidStr($_POST['login']);
    $name = isValidStr($_POST['name']);
    $surname = isValidStr($_POST['surname']);
    $password = (isValidStr(password_hash($_POST['password'], PASSWORD_DEFAULT)));
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

if (empty($user)) {
    $query = "INSERT INTO users
        SET login='$login', password='$password',
        birthday='$birthday', email='$email', country='$country'";
    mysqli_query($link,$query);
} else {
    echo 'Логин уже занят!';
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

    <?php
    if (preg_match('/^([а-яё]+|[a-z]+)$/i', $name)):
        echo 'Имя должно содержать только кириллицу или латинские буквы';
    else:
        $name = isValidLength($_POST['name'], 2, 18);
    endif;?>
    <p> name : <input name="name"></p>

    <?php
    if (preg_match('/^([а-яёА-ЯЁ]+|[a-zA-Z]+)$/i', $surname)):
        echo 'Фамилия должна содержать только кириллицу или латинские буквы';
    else:
        $surname = isValidLength($_POST['surname'],3,20);
    endif;?>
    <p> surname : <input name="surname"></p>

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

<br>
<br>



