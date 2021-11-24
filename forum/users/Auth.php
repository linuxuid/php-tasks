<?php
include "../database/db_connect.php";
session_start();

/*
 * function
 */

/*
 * isValid string
 */
function isValid($data) {
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    $data = trim($data);

    return $data;
}

/*
 * after logout message
 */
if (isset($_SESSION['logout'])) {
    echo 'logout';
}

echo "<br>";



/*
 * isset submit
 */
if (isset($_REQUEST['sub'])){

    // check login
    if (!$_REQUEST['login']){
        $error = 'Write login!';
    } else {
        isValid($_REQUEST['login']);
    }

    //check password
    if (!$_REQUEST['password']){
        $error = 'Write password!';
    } else {
        isValid($_REQUEST['password']);
    }

    if (!$error) {
        $login = $_REQUEST['login'];
        $password = $_REQUEST['password'];

        $query = "SELECT id, password FROM users WHERE login='$login'";
        $result = mysqli_query($link,$query) or die($link);
        while($row = mysqli_fetch_assoc($result)){
            // checking id user
            if ($row['id']){
                // if exists we compare password with func password_verify
                if (password_verify($password, $row['password'])) {
                    // if return true you will auth
                    echo 'Welcome ' . '<strong style="color: red">' . $login . '</strong>' . "<br>";
                    echo 'You are logging now, if you want to logout type this <a href="logout.php">logout</a>' . "<br>";
                    echo 'type link if you want to see topic <a href="../send_page/board.php">forum</a>';

                    echo "<br>"."<br>"."<br>";
                    // Topic Submission Form
                    echo "
                            <style>
                            input[type=text], input[type=email], input[type=password] 
                            {
                                        width: 100%;
                                        padding: 15px;
                                        margin: 5px 0 22px 0;
                                        display: inline-block;
                                        border: none;
                                        background: #f1f1f1;
                            }
                            .btn 
                            {
                                        background-color: #4CAF50;
                                        color: white;
                                        padding: 16px 20px;
                                        margin: 8px 0;
                                        border: none;
                                        cursor: pointer;
                                        width: 100%;
                            }
                            </style>    
                            
                           <h2>Message</h2>
                        <form action='../send_page/board.php' method='POST'>
                            
                                <label for='topic'>Topic:</label>
                                <input type='text' name='topic'>
                                <label for='description'>Description:</label>
                                <input type='text' name='description'>
                                
                                <label for='section_name'>Select theme:</label>
                                <select class='btn' name='section_name'>
                                    <option>General</option>
                                    <option>Programming</option>
                                    <option>Hacking</option>
                                </select>
                                <input class='btn' value='send' type='submit' name='sub'>
                        </form>";

                    // Authorization id
                    $_SESSION['auth'] = true;
                    exit();
                } else {
                    echo 'Failed';
                }
            }
        }
    } else {
        echo $error;
    }
}

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/style.css" type="text/css">
    <title>Authorization</title>
</head>
<body>
<!-- Auth form -->
    <form action="" method="POST">
        <!-- Container -->
        <div class="container">
            <!-- input -->
            <label for="login">Login:</label>
            <input type="text" name="login">
            <label for="password">Password:</label>
            <input type="password" name="password">
            <input type="submit" class="registerbtn" value="Authorization" name="sub">
        </div>
    </form>
<?php
echo "<hr>";
/*
 * register link
 */
echo 'if you don\'t have account, can you register? <a href="../users/register.php">register</a>'; ?>

</body>
</html>


