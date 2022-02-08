<?php
    session_start();
    require_once('connectDB.php');

    $errors=array();
    $ct_fail_password=0;
    $ct_fail_email=0;
  if($_POST)
    {
        $sql="SELECT id, email, pass FROM user WHERE email=?";
        $query=$pdo->prepare($sql); 
        $query->execute([$_POST['us_email']]);
        $result=$query->fetch();
        if($result)
        {
            if(password_verify($_POST['us_pass'],$result['pass'])) //Проверяет, соответствует ли пароль хэшу
            {
                $_SESSION=array();
                $_SESSION['id']=$result['id'];
                $_SESSION['email']=$_POST['us_email'];
                header("Location:../index.php");
                exit();
            }
            else
            {
                $ct_fail_password=1;
            }
        }
        else
        {
            $ct_fail_email=1;
        }
    }
?>