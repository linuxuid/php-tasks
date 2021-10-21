<?php
session_start();
foreach ($_SESSION['user'] as $value) {
    echo "<ul><li>$value</li></ul>";
}