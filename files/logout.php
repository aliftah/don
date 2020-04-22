<?php
    session_start();
    session_destroy(); // ALL sessions of your site will be destoryed
    header("location: ../index.php"); // or where ever you want to redirect the user
?>