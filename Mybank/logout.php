<?php

session_start();

    if(!isset($_SESSION["user_1"])){
        header("location:index.html");
    }

session_destroy();
header("Location:index.html");



?>