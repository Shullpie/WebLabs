<?php
    session_start();
    require_once('connectDB.php');

    $errors=array();
    $ct_fail_password=0;
    $ct_fail_email=0;
    function save_count()
    {
      if($_SESSION['count_error_avtorisation']==0)
      {
          $_SESSION['count_error_avtorisation']=1;
      }
      else
      {
          $_SESSION['count_error_avtorisation']++;
          if($_SESSION['count_error_avtorisation']==3)
          {
              $_SESSION['time_lock_error_avtorisation']=time();
          }
      }
    }
  if($_POST)
    {
        $sql="SELECT id, email, pass FROM user WHERE email=?";
        $query=$pdo->prepare($sql); //возвращает PDO statement, но ещё без данных
        $query->execute([$_POST['us_email']]); //достает данные из бд по ключу
        $result=$query->fetch(); // fetch(), который служит для последовательного получения строк из БД
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
                save_count();
                $ct_fail_password=1;
            }
        }
        else
        {
            $ct_fail_email=1;
        }
    }
?>