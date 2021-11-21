<?php
include "database.php";

$query = "SELECT users.id, users.login, board.user_id, board.topic, board.description 
          FROM users 
          LEFT JOIN board ON board.user_id=users.id
          WHERE board.topic IS NOT NULL";
$res = mysqli_query($link,$query) or die($link);

while ($row = mysqli_fetch_assoc($res)){
    echo "<p>" . 'Author ' . $row['login'] . '<br>' . ' topic name : ' . $row['topic']
        . "<br>" . "description : " . $row['description'] . "<br>"
        .   "  
            <form action='delete.php' method='POST'>
            <input type='hidden' name='id' value='" . $row['id'] . "'/>
            <input type='submit' value='Удалить запись'> 
           </form>". "<p>";
}

?>