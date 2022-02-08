<?php session_start();?>
<?php
  require_once("connectDB.php");
  require_once('check_reg.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/favicon.png" type="image/png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <?php
        $errors=$_SESSION['errors'];
  ?>
  <title>Building Web Applications in PHP | Coursera</title>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="max-height: 65px;">
      <div class="container-fluid">
        <div class="col-md-auto">
          <a class="navbar-brand" href="#"> <a href='#'><img src='img/logo.svg' width="130"></a>
        </div>
      </div>
    </nav>
  </header>

  <section>
    <div class="grad" style="padding-top: 85px; padding-bottom:50px">
      <div class="container">
        <div class="card text-center">
          <div class="card-header">
            Регистрация
          </div>
          <div>
            <form action="registration.php" method="post">
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Логин</label>
                <div class="col-sm-10">
                <!-- htmlspecialchars Преобразует специальные символы в HTML-сущности."'" (одиночная кавычка) преобразуется в '&#039;' (или &apos;) только в режиме ENT_QUOTES.-->
                  <input value="<?= htmlspecialchars($_POST['us_email'], ENT_QUOTES) ?>" type="text" name="us_email" class="form-control" placeholder="email@example.com">
                  <span style="color:red"><?php echo $errors['email']; ?></span>
                  <span style="color:red"><?php echo $errors['email_double']; ?></span>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Пароль</label>
                <div class="col-sm-10">
                  <input value="<?= htmlspecialchars($_POST['us_pass1'], ENT_QUOTES) ?>" type="password" name="us_pass1" class="form-control" placeholder="Password">
                  <span style="color:red"><?php echo $errors['pass']; ?></span>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Повторите пароль</label>
                <div class="col-sm-10">
                  <input value="<?= htmlspecialchars($_POST['us_pass2'], ENT_QUOTES) ?>" type="password" name="us_pass2" class="form-control" placeholder="Password">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">ФИО</label>
                <div class="col-sm-10">
                  <input value="<?= htmlspecialchars($_POST['us_fio'], ENT_QUOTES) ?>" type="text" name="us_fio" class="form-control" placeholder="Фамилия Имя Отчестсво">
                  <span style="color:red"><?php echo $errors['fio']; ?></span>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Дата рождения</label>
                <div class="col-sm-10">
                  <input value="<?= htmlspecialchars($_POST['us_date'], ENT_QUOTES) ?>" type="text" name="us_date" class="form-control" placeholder="18.02.2003">
                  <span style="color:red"><?php echo $errors['date']; ?></span>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Адрес</label>
                <div class="col-sm-10">
                  <input value="<?= htmlspecialchars($_POST['us_adress'], ENT_QUOTES) ?>" type="text" name="us_adress" class="form-control" placeholder="">
                  <span style="color:red"><?php echo $errors['adress']; ?></span>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Пол</label>
                <div class="col-sm-10" style="padding-right:500px">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" name="us_gender" type="radio" id="inlineRadio2" value="1">
                    <label class="form-check-label" for="inlineRadio2">Мужской</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" name="us_gender" type="radio" id="inlineRadio2" value="2">
                    <label class="form-check-label" for="inlineRadio2">Женский</label>
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Интересы</label>
                <div class="col-sm-10">
                  <input value="<?= htmlspecialchars($_POST['us_interests'], ENT_QUOTES) ?>" type="text" name="us_interests" class="form-control" placeholder="">
                  <span style="color:red"><?php echo $errors['interests']; ?></span>
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Ссылка на профиль вк</label>
                <div class="col-sm-10">
                  <input value="<?= htmlspecialchars($_POST['us_vk_link'], ENT_QUOTES) ?>" type="text" name="us_vk_link" class="form-control" placeholder="http://www.vk.com/...">
                  <span style="color:red"><?php echo $errors['vk_link']; ?></span>
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Группа крови</label>
                <div class="col-sm-10">
                  <input value="<?= htmlspecialchars($_POST['us_blood'], ENT_QUOTES) ?>" type="text" name="us_blood" class="form-control" placeholder="">
                  <span style="color:red"><?php echo $errors['blood']; ?></span>
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Резус фактор</label>
                <div class="col-sm-10">
                  <input value="<?= htmlspecialchars($_POST['us_rezus'], ENT_QUOTES) ?>" type="text" name="us_rezus" class="form-control" placeholder="Резус-фактор">
                  <span style="color:red"><?php echo $errors['rezus']; ?></span>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
              <ol class="breadcrumb" style="padding-left:48.5% ;">
                <li class="breadcrumb-item"><a href="authorisation.php">Авторизация</a></li>
              </ol>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>