<?php
session_start();
if (isset($_SESSION['new']));
session_destroy();
var_dump($_SESSION['new']);

