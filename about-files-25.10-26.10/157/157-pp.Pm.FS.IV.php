<?php

function getFile($name) {
    /*
     * Включение буферизации
     */
    ob_start();
        include $name;
    return ob_get_clean();
}


?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
    <header>
        <h2>Once</h2>
        <?php echo getFile('157-file.php') ?>
    </header>
    </body>
</html>
