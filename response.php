<?php
    require_once 'database.php';
    // Reference: https://medoo.in/api/insert
    if($_POST){
        $database->insert("tb_users",[
            "fullname"=> $_POST["fullname"],
            "usr"=> $_POST["usr"],
            "pwd"=> $_POST["pwd"],
            "email"=> $_POST["email"],
            "type_user"=> $_POST["type_user"]
        ]);
    }
?>