<?php
    date_default_timezone_set("Asia/Jakarta");
    error_reporting(0);

    $HOST = 'localhost';
    $USERNAME = 'root';
    $PASSWORD = '';
    $DATABASE = 'db_store';

    try{
        $config = new PDO("mysql:host=$HOST;dbname=$DATABASE; $USERNAME, $PASSWORD");
        echo 'success';
    }catch(PDOException $err){
        echo 'connetion failed'.$err -> getMessage();
    }

    $view = 'function/view/view.php';
?>