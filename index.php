<?php 
    @ob_start();
    session_start();

    if(!empty($_SESSION['admin'])){
        require 'config.php';
        include $view;
        $look = new view($config);
        $store = $look -> store();
        // administrator   
            include 'admin/section/header.php';
            include 'admin/section/sidebar.php';
                if(!empty($_GET['page'])){
                    include 'admin/module/'.$_GET['page'].'/index.php';
                }else{
                    include 'admin/template/home.php';
                }
            include 'admin/template/footer.php';
        // end administrator
    }else{
        echo '<script>window.location="login.php";</script>'
        exit;
    }
?>