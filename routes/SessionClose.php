<?php
session_start();
session_destroy();
header("location:../Views/Home.php")
?>