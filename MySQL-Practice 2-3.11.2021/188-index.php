<?php
include 'connect_db.php';
include '188-show.php';


$id = $_GET['id'];


?>


<?php if ($id == 1): ?>
    <a href="188-show.php?id=1"><?= $user['name'] ?></a>
<?php elseif ($id == 2): ?>
    <a href="188-show.php?id=2"><?= $user['name'] ?></a>
<?php else: ?>
    <a href="188-show.php?id=3"><?= $user['name'] ?></a>
<?php endif; ?>

