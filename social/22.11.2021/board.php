<?php
include "database.php";
session_start();

/*
 * function checking validation
 */

/*
 * Function for check unwanted characters
 */
function isValid($data) {
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);

    return $data;
}

/*
 * Function for check length characters
 */
function isLength($str, $min, $max){
    if ($str < $min) {
        return 'is very short';
    }
    if ($str > $max) {
        return 'is very long';
    }
    return TRUE;
}

/*
 * checking about auth user
 */
if (!empty($_SESSION['auth'])) {
    echo 'Welcome, type link if you want logout <a href="logout.php"> logout</a>' . '<br>' . '<br>';

    echo ' <h2>if you login , can you write something?</h2>
    <form method="POST">
        <p> theme name : <input type="text" name="topic"></p>
        <p> description : <input type="text" name="description"></p>
        <input type="submit" name="sub">
    </form>';
} else {
    echo 'Please authorization <a href="auth.php">Authorization page</a>';
}

if (isset($_REQUEST['sub'])){

    // checking if form exists
    if (!$_REQUEST['topic']){
        $error = 'Please write topic';
    } else {
        isValid($_REQUEST['topic']);
        isLength($_REQUEST['topic'], 20, 150);
    }

    if (!$_REQUEST['description']) {
        $error = 'Please write description';
    } else {
        isValid($_REQUEST['description']);
        isLength($_REQUEST['description'], 20, 150);
    }
}

// if there are no errors
if (!$error) {
    $topic = $_REQUEST['topic'];
    $description = $_REQUEST['description'];

    $query = "SELECT * FROM board WHERE topic='$topic'";
    $res = mysqli_query($link,$query) or die($link);
    $resQuery = mysqli_fetch_assoc($res);

    if (empty($resQuery)){
        $query = "INSERT INTO board SET topic='$topic', description='$description'";
        mysqli_query($link,$query) or die(mysqli_error($link));
        echo 'For now one you send your form, type link <a href="boardOut.php">link is here</a>';

    } else {
        echo 'this topic name already exists';
    }
} else {
    echo $error;
}
?>


