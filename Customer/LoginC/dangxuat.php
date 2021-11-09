<?php
session_start();

unset($_SESSION['check']);
session_destroy();

header("location:../../home.php");

?>