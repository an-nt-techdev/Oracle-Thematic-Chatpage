<?php

if($_GET['signup']==1){ // đã ấn nút dky sau khi nhập phone,pass
    if(isset($_POST['inputPhone']) && isset($_POST['inputPassword'])){
        $phone = $_POST['inputPhone'];
        $pass= $_POST['inputPassword'];
        require_once SITE_ROOT."/Daos/UserDao.php";
        require_once SITE_ROOT."/Entities/Userr.php";
        $userDao = new UserDao();
        $user = new Userr($phone,$pass,null,null,null,null,null);
        $res = $userDao->InsertUser($user);
        if($res==1){
            echo("DangKy Ok");
            require_once SITE_ROOT."/Controllers/SigninController.php";
        }
        else{
            echo("Dky fail");
            require_once SITE_ROOT."/Controllers/SignupController.php";
        }
        
    }
}
else{
    require_once SITE_ROOT."/Views/sign-up.php";
}
?>
            