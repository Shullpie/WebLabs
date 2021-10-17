<?php require_once 'logic.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Courses</title>
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row" style="padding-top: 1%">
                <div class="col-md-auto">
                    <img src='https://cdn.freelogovectors.net/wp-content/uploads/2021/02/coursera-logo.png' width="120px">
                </div>
                <div class="col-md-auto" style="--bs-breadcrumb-divider: ''; padding-left: 61%" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" style="color: black; text-decoration: none">Для организаций</a></li>
                        <li class="breadcrumb-item"><a href="#" style="color: black; text-decoration: none;">Для студентов</a></li>
                        <li class="breadcrumb-item"><a href="#" style="text-decoration: none;">Войти</a></li>
                    </ol>
                </div>
                <div class="col-md-auto">
                    <button class="btn btn-primary" type="submit" style="font-weight:bold; margin-top:-5px">Присоединиться бесплатно</button>
                </div>
            </div>
        </div>
    </header>

    <section class="grad" style="padding-top: 5%;">
        <div class="container">
            <form action="courses.php" method="POST">
                <div class="row text-center white">
                    <p style="font-size: 150%; font-weight: bold">ФИЛЬТР</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-auto white" style="font-weight: bold; font-size: 115%; padding-top:0.2%; padding-left:15.5%">Цена</div>
                    <div class="col-3">
                        <input type="text" name="price1" class="form-control" placeholder="Цена от" value="<?= $price_min ?>">
                    </div>
                    <div class="col-3">
                        <input type="text" name="price2" class="form-control" placeholder="Цена до" value="<?= $price_max ?>">
                    </div>
                </div>
                <div class="row justify-content-center" style="padding-top: 1%;">
                    <div class="col-auto white" style="font-weight: bold; font-size: 115%; padding-top:0.2%; padding-left:10.5%">Имя лектора</div>
                    <div class="col-6">
                        <select class="form-select" name="lecturer_name" >
                            <option value = "">Лектор</option>
                            <option <?php if ($l_name == "Charles Russell")       echo "selected" ?> value="Charles Russell">Charles Russell</option>
                            <option <?php if ($l_name == "Xiaobo Zhou")           echo "selected" ?> value="Xiaobo Zhou">Xiaobo Zhou</option>
                            <option <?php if ($l_name == "Andrew Ng")             echo "selected" ?> value="Andrew Ng">Andrew Ng</option>
                            <option <?php if ($l_name == "Dr. Edward G. Amoroso") echo "selected" ?> value="Dr. Edward G. Amoroso">Dr. Edward G. Amoroso</option>
                            <option <?php if ($l_name == "Tim Carrington")        echo "selected" ?> value="Tim Carrington">Tim Carrington</option>
                        </select>
                    </div>
                </div>
                <div class="row justify-content-center" style="padding-top:1%">
                    <div class="col-auto white" style="font-weight: bold; font-size: 115%; padding-top:0.2%; padding-left:8.5%;">Название курса</div>
                    <div class="col-6">
                        <input type="text" name="course_name" class="form-control" placeholder="Название" value="<?= $c_name ?>">
                    </div>
                </div>
                <div class="row justify-content-center" style="padding-top:1%">
                    <div class="col-auto white" style="font-weight: bold; font-size: 115%; padding-top:0.2%; padding-left:7%;">Программа курса</div>
                    <div class="col-6">
                        <input type="text" name="course_program" class="form-control" placeholder="Пограмма" value="<?= $c_program ?>">
                    </div>
                </div>
                <div class="row justify-content-center" style="padding-top:1%; padding-bottom:5%">
                    <div class="col-auto">
                        <button type="submit" class="btn btn-success">Применить</button>
                    </div>
            </form>
            <div class="col-auto">
                <form action="index.php">
                    <button type="submit" class="btn btn-danger">Очистить</button>
                </form>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <table class="table table-hover">
                    <tr>
                        <th>Картинка курса</th>
                        <th>Название курса</th>
                        <th>Имя лектора</th>
                        <th>Программа курса</th>
                        <th>Стоимость(руб.)</th>
                    </tr>
                    <?php foreach ($rez as $item) : ?>
                        <tr>
                            <td><img src="<?= $item['img_path'] ?>" width=200px class="rounded"></td>
                            <td>
                                <div class="namec"><?= $item['name'] ?></div>
                            </td>
                            <td>
                                <div class="lectr"><?= $item['lecturer'] ?></div>
                            </td>
                            <td>
                                <div class="progr"><?= $item['program'] ?></div>
                            </td>
                            <td>
                                <div class="costt"><?= $item['cost'] ?></div>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </table>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>