<?php 
    session_start();
    session_destroy();

    //redirect to index page
    header("Location: home.php");
?>