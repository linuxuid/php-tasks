<?php
include '../database/db_connect.php';
session_start();

/*
 * isValid function
 */
function isValid($data) {
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    $data = trim($data);

    return $data;
}

/*
 * isLength function
 */
function isLength($str, $min, $max){
    if ($str < $min){
        return "string is very short, should be $min";
    }
    if ($str > $max){
        return "max symbols $max";
    }
    return TRUE;
}

/*
 * submitting the form to db
 */
if (isset($_REQUEST['sub'])){
    // checking if form exists
    // checking topic
    if(!$_REQUEST['topic']){
        $error = 'topic is empty';
    } else {
        isValid($_REQUEST['topic']);
        isLength($_REQUEST['topic'], 20, 40);
    }

    // checking description
    if (!$_REQUEST['description']){
        $error = 'description is empty';
    } else {
        isValid($_REQUEST['description']);
        isLength($_REQUEST['description'], 40, 150);
    }

    // if form without $error
    if (!$error){
        $topic = $_REQUEST['topic'];
        $description = $_REQUEST['description'];
        $section_name = $_REQUEST['section_name'];
        $date = date('Y-m-d H:i:s');

        $query = "SELECT * FROM sections WHERE topic='$topic'";
        $result = mysqli_query($link,$query) or die($link);
        $user = mysqli_fetch_assoc($result);

        if (empty($user)){
        $query = "INSERT INTO sections SET section_name='$section_name',
                  description='$description', topic='$topic', register_time='$date'";
        mysqli_query($link,$query) or die(mysqli_error($link));
        } else {
            echo 'failed' . "<br>";
        }
      } else {
        echo $error;
    }
}

/*
 * if user authorized
 */
/*
 * logout
 */
if (isset($_SESSION['auth'])){
    echo 'You are logging now, if you want to logout type this <a href="../users/logout.php">logout</a>' . "<br>";
    echo 'If you want to write some topic type this <a href="../users/Auth.php">write post</a>'."<br>" . "<br>";

    /*
     * query to db
     */
    $query = "SELECT users.id, users.name, sections.id, sections.section_name, sections.description, sections.topic, sections.register_time 
              FROM users 
              LEFT JOIN sections ON sections.id=users.id
              WHERE section_name IS NOT NULL";
    $result = mysqli_query($link,$query) or die($link);

    /*
     * output from db
     */
    echo "<h3>forum - messages</h3>";
    while ($row = mysqli_fetch_assoc($result)){
        echo "<hr>";
        echo 'created ' . $row['register_time'] . "<br>";
        echo '<strong>name user</strong> : ' . $row['name'] . "<br>";
        echo '<strong>section</strong> : ' . $row['section_name'] . '<br>';
        echo ' <strong> topic</strong> : ' . $row['topic'] . '<br>';
        echo '<strong>description</strong> : ' . $row['description'] . "<br>";

        echo "<form action='../delete/delete.php' method='POST'>
                <input type='hidden' name='id' value='" . $row['id'] . "'/>
                <input type='submit' value='delete'>
            </form>";

    }

} else {
    echo 'if you want to read forum, please login <a href="../users/Auth.php">Authorization page</a>';
}

/*
 * Можно сделать 3 ссылки на разные темы, 3 темы-3ссылки, после этого в каждой теме можно
 * сделать так чтобы оставляли комментарии users
 */
?>