<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/favicon.png" type="image/png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Building Web Applications in PHP | Coursera</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="max-height: 65px;">
      <div class="container-fluid">
        <div class="col-md-auto">
          <a class="navbar-brand" href="#"> <a href='#'><img src='img/logo.svg' width="130"></a>
        </div>
        <div class="col-md-auto">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown"
            aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown ">
              <a class="btn btn-primary btn-sm nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-weight:bold">
                Изучить
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
          <div class="col-md-auto">
            <form class="d-flex" role="group">
              <input class="form-control me-2" type="search" placeholder="Чему вы хотите научиться?"
                aria-label="Search">
              <button class="btn btn-outline-success form-control me-2" type="submit"><img src='img/lupa.png'
                  width="15"></button>
            </form>
          </div>
          <div class="col-6">
          </div>
          <div class="col-md-auto">
            <div class="dropdown">
              <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                data-bs-toggle="dropdown" aria-expanded="false">
                Присоединиться бесплатно
              </a>

              <ul class="dropdown-menu" style="min-width: 500px;" aria-labelledby="dropdownMenuLink">
              <?php if($_SESSION['id']<1){ ?>
              <p style="padding-left: 40px;"> <b>Вы не авторизованы</b></p>
                <li><a class="dropdown-item" href="authorisation.php"> <button type="button" class="btn btn-link" style="padding-left: 20px;"> Ввести логин и пароль </button></a></li>
                <li><a class="dropdown-item" href="registration.php"> <button type="button" class="btn btn-link" style="padding-left: 20px;"> Зарегистрироваться </button></a></li>
              <?php
                  } else{ ?>
                  <span>Вы авторизованы как <br> <?=$_SESSION['email'] ?></span>
                  <a class="link1" href="logout.php">Выход</a>
                  <li><a class="link1" href="http://lr2/courses.php">Секретная страница</a></li>
              <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <section class="grad">
    <div class="container">
      <div class="row">
        <div class="col-7 bread">
          <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item" style="font-weight:bold"><a class="breadPart" href="#">Обзор</a></li>
              <li class="breadcrumb-item" style="font-weight:bold"><a class="breadPart" href="#">Компьютерные науки</a>
              </li>
              <li class="breadcrumb-item" style="font-weight:bold"><a class="breadPart" href="#">Разработка мобильных и
                  веб-преложений</a></li>
            </ol>
          </nav>
        </div>
        <div class="col-5 part" style="color: white; padding-top: 50px;padding-left: 2%;">от партнера</div>
      </div>
      <div class="row">
        <div class="col-7">
          <div class="" style=" color:white">Этот курс входит в специализацию
            <button type="button" class="btn btn-link linkUnderLine">''Специализация Web Applications for
              Everybody''</button>
          </div>
        </div>
        <div class="col-5">
          <img src="img/michegan.png" alt="" style="padding-top: 0%;">
        </div>
      </div>
      <div class="row">
        <div class="col-md-auto" style="color: white; font-size: 220%; font-weight: bold;padding-top: 0%;">
          Building Web Applications in PHP
        </div>
      </div>
      <div class="row">
        <div class="col-md-auto"><img src="img/stars.png"></div>
        <div class="col-md-auto"><button type="button" class="btn btn-link stat">Оценки: 3 624 • Рецензии: 816 </button>
        </div>
      </div>
      <div class="row otstup1">
        <div class="col-md-auto">
          <img src="img/Charles-Severance.jpeg" alt="" class="round" ;>
        </div>
        <div class="col-md-auto">
          <div class="white" style="padding-left: 0%; padding-top: 3%; margin-left: 0%;">Charles Russell Severance
          </div>
        </div>
      </div>
      <div class="row otstup1">
        <div class="col-md-auto">
          <button type="button" class="btn btn-warning">
            <div class=""
              style="font-size: large; font-weight: 600; padding-left: 10px; padding-right: 10px; padding-top: 5px;">
              Участвовать бесплатно</div>
            <div class="" style="font-weight: 600; font-size: small; padding-bottom: 5px;">Начинается 20 сент.г.</div>
          </button>
        </div>
        <div class="col-md-auto">
          <div class="col-md-auto"><button type="button" class="btn btn-link linkUnderLine "
              style="padding-top: 15%; font-size: 70%">Доступна финансовая помощь</button></div>
        </div>
      </div>
      <div class="row" style="padding-top: 20px;">
        <div class="col-md-auto" style="padding-bottom: 50px;">
          <div class="white">
            <h6>117 203 уже зарегистрированы</h6>
          </div>
        </div>
      </div>
  </section>

  <div class="sticky-top">
    <section>
      <div class="container">
        <div class="row" style="background-color: rgb(255, 255, 255); padding-top: 15px; padding-bottom: 15px;">
          <div class="col-md-auto">
            <button type="button" class="btn btn-link footerStyle" style="padding-left: 0%; padding-right: 0%;">О
              проекте</button>
          </div>
          <div class="col-md-auto">
            <button type="button" class="btn btn-link footerStyle"
              style="padding-left: 0%; padding-right: 0%;">Преподаватели</button>
          </div>
          <div class="col-md-auto">
            <button type="button" class="btn btn-link footerStyle"
              style="padding-left: 0%; padding-right: 0%;">Программа курса</button>
          </div>
          <div class="col-md-auto">
            <button type="button" class="btn btn-link footerStyle"
              style="padding-left: 0%; padding-right: 0%;">Рецензии</button>
          </div>
          <div class="col-md-auto">
            <button type="button" class="btn btn-link footerStyle"
              style="padding-left: 0%; padding-right: 0%;">Параметры регистрации</button>
          </div>
          <div class="col-md-auto">
            <button type="button" class="btn btn-link footerStyle" style="padding-left: 0%; padding-right: 0%;">Часто
              задаваемые вопросы</button>
          </div>
        </div>
      </div>
    </section>
    <hr>
  </div>

  <section>
    <div class="container">
      <div class="row" style="padding-top: 15px; color:#333">
        <div class="col-8">
          <div class="">
            <h4>Об этом курсе</h4>
          </div>
          <div class="col-12">
            <div class="" style="font-weight:bold; color: #666;">Недавно просмотрено: 175 168</div>
          </div>
          <div class="col-12" style="padding-bottom: 20px;">
            <div class="">In this course, you'll explore the basic structure of a web application, and how a web browser
              interacts with a web server. You'll be introduced to the request/response cycle, including
              GET/POST/Redirect. You'll also gain an introductory understanding of Hypertext Markup Language (HTML), as
              well as the basic syntax and data structures of the PHP language, variables, logic, iteration, arrays,
              error handling, and superglobal variables, among other elements. An introduction to Cascading Style Sheets
              (CSS) will allow you to style markup for webpages. Lastly, you'll gain the skills and knowledge to install
              and use an integrated PHP/MySQL environment like XAMPP or MAMP.</div>
          </div>
          <div class="col-12 border border rounded">
            <div class="" style="padding:30px 20px; font-weight: bold; color: #666; font-size: 90%;">ПРИОБРЕТАЕМЫЕ
              НАВЫКИ</div>
            <div class="row" style="padding-bottom:30px; padding-left: 30px; gap: 10px;">
              <div class="col-md-auto" style="background-color: #ebeced; border-radius: 10px;">
                <div class=""> Hypertext Preprocessor (PHP) </div>
              </div>
              <div class="col-md-auto" style="background-color: #ebeced; border-radius: 10px;">
                Html
              </div>
              <div class="col-md-auto" style="background-color: #ebeced; border-radius: 10px">
                Cascading Style Sheets (CCS)
              </div>
            </div>
          </div>
        </div>
        <div class="col-4 row">
          <div class="col-2" style="padding-top:15px">
            <img src="img/1.png" alt="" class="" style="width: 45px">
          </div>
          <div class="col-10" style="padding-top:15px">
            <div class="" style="font-weight: bold; font-size: 150%;">Гибкие сроки</div>
            <div class="" style="color: #6e767f;">Назначьте сроки сдачи в соответствии со своим графиком.</div>
          </div>
          <div class="col-2" style="padding-top:5%">
            <img src="img/2.png" alt="" class="" style="width: 45px">
          </div>
          <div class="col-10" style="padding-top:5% ">
            <div class="" style="font-weight: bold; font-size: 150%;">Сертификат, ссылками на который можно делиться с
              другими людьми</div>
            <div class="" style="color: #6e767f;">Получите сертификат по завершении</div>
          </div>
          <div class="col-2" style="padding-top:5%">
            <img src="img/3.png" alt="" class="" style="width: 45px">
          </div>
          <div class="col-10" style="padding-top:5% ">
            <div class="" style="font-weight: bold; font-size: 150%">100% онлайн</div>
            <div class="" style="color: #6e767f;">Начните сейчас и учитесь по собственному графику.</div>
          </div>
          <div class="col-2" style="padding-top:5%">
            <img src="img/4.png" alt="" class="" style="width: 45px">
          </div>
          <div class="col-10" style="padding-top:5% ">
            <div class="" style="font-weight: bold; font-size: 150%">Курс 1 из 4 в программе</div>
            <div class=""><button type="button" class="btn btn-link spec" style="padding-left: 0%">Специализация Web
                Applications for Everybody</button></div>
          </div>
          <div class="col-2" style="padding-top:5%">
            <img src="img/5.png" alt="" class="" style="width: 45px">
          </div>
          <div class="col-10" style="padding-top:5% ">
            <div class="" style="font-weight: bold; font-size: 150%">Средний уровень</div>
          </div>
          <div class="col-2" style="padding-top:5%">
            <img src="img/6.png" alt="" class="" style="width: 45px">
          </div>
          <div class="col-10" style="padding-top:5%">
            <div class="" style="font-weight: bold; font-size: 150%">Прибл. 31 час на выполнение</div>
          </div>
          <div class="col-2" style="padding-top:5%">
            <img src="img/7.png" alt="" class="" style="width: 45px">
          </div>
          <div class="col-10" style="padding-top:5% ">
            <div class="" style="font-weight: bold; font-size: 150%">Английский</div>
            <div class="" style="color: #6e767f;">Субтитры: Арабский, Французский, Португальский (Европа), Итальянский,
              Вьетнамский, Корейский, Немецкий, Русский, Английский, Испанский</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row" style="padding-top: 5%;">
        <div class="col-md-auto">
          <div class="" style="font-size: 150%; font-weight: bold; color: #373a3c;"> Преподаватели</div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-auto">
          <div class="" style="font-weight: bold; color: #6e6e6e"> Оценка преподавателя </div>
        </div>
        <div class="col-md-auto" style="padding-left: 0%; padding-right: 0%;">
          <img src="img/chel.png" alt=""
            title="Мы попросили всех учащихся предоставить отзывы о качестве преподавания наших специалистов">
        </div>
        <div class="col-md-auto">
          <div class="" style="color: #6e6e6e; font-weight: bold; padding-left: 0%;"> 4,78/5 (оценок: 591)</div>
        </div>
        <div class="col-md-auto" style="padding-left: 0%; padding-right: 0%;">
          <img src="img/info-icon.png" alt=""
            title="Мы попросили всех учащихся предоставить отзывы о качестве преподавания наших специалистов"
            style="width: 25px; padding-left: 0%;">
        </div>
      </div>
      <div class="row" style="padding-top: 15px;">
        <div class="col-md-auto">
          <img src="img/Charles-Severance-BIG.jpeg" alt="" class="round">
        </div>
        <div class="col-9 row" style="gap: 0px;">
          <div class="col-12" style="padding:0% 0%">
            <div class=""><button type="button" class="btn btn-link charles"
                style="font-size:120%; padding-bottom: 0%;">Charles Russell Severance</button></div>
            <button type="button" class="btn btn-outline row" style="width: 300px">
              <div class="col-7" style=" margin-left: -5px;">Clinical Proffessor</div>
              <div class="col-7" style="font-size: 70%; color: #936d48; padding-top: 5px; margin-left: -15px">School of
                information</div>
              <div class="col-12 row" style="padding-top: 5px">
                <div class="col-1">
                  <img src="img/2chel.png" alt="" class="" style="width: 14px">
                </div>
                <div class="col-4" style="padding-top: 5px;">
                  <div class="" style="font-size: 80%; font-weight: bold; padding-left: 0%;">3 049 568</div>
                </div>
                <div class="col-2" style="padding-top: 5px; padding-left: 0%;">
                  <div class="" style="font-size: 80%">учащихся</div>
                </div>
              </div>
              <div class="col-12 row" style="padding-top: 0%">
                <div class="col-1">
                  <img src="img/SvgBook.png" alt="" class="" style="width: 14px">
                </div>
                <div class="col-md-auto" style="padding-top: 5px;">
                  <div class="" style="font-size: 80%; font-weight: bold; padding-left: 0%;">46</div>
                </div>
                <div class="col-md-auto" style="padding-top: 5px; padding-left: 0%;">
                  <div class="" style="font-size: 80%; padding-left: 0%;">курсов</div>
                </div>
              </div>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container" style="padding-top:5%; padding-bottom: 2%;">
      <div class="row">
        <div class="col-md-auto">
          <div class="" style="font-size: 150%; font-weight: bold; color: #373a3c;"> от партнера </div>
        </div>
      </div>
      <div class="row" style="padding-top: 25px;">
        <div class="col-md-auto">
          <img src="img/michegan2.jfif" alt="">
        </div>
        <div class="col-6 row">
          <div class=""><button type="button" class="btn btn-link charles"
              style="font-size:150%; padding-bottom: 0%; margin-top: -15px; margin-left: -25px;">Мичиганский
              университет</button></div>
          The mission of the University of Michigan is to serve the people of Michigan and the world through preeminence
          in creating, communicating, preserving and applying knowledge, art, and academic values, and in developing
          leaders and citizens who will challenge the present and enrich the future.
        </div>
      </div>
    </div>
  </section>

  <section style="background-color: #f4f6f9;">
    <div class="container" style="padding-top: 50px; padding-bottom: 50px;">
      <div class="row">
        <div id="carouselExampleIndicators" class="carousel slide carousel-dark block-center" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
              aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
              aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active " style="padding-left: 20%; max-width: 80%;">
              <div class="card mb-3">
                <div class="row g-0 ">
                  <div class="col-md-2">
                    <img src="img/face1.png" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-10 ">
                    <div class="card-body" style="padding-top: 10%;">
                      <p class="card-text">На Coursera я развиваюсь как личность и как профессионал. Курсы помогли мне
                        лучше справляться с повседневными задачами.</p>
                      <p class="card-text"><small class="text-muted" style="padding-left: 90%; font-size: 90%;">— Tri
                          S.</small></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item" style="padding-left: 20%; max-width: 80%;">
              <div class="card mb-3">
                <div class="row g-0 ">
                  <div class="col-md-2">
                    <img src="img/face2.png" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-10 ">
                    <div class="card-body" style="padding-top: 10%;">
                      <p class="card-text">Учеба — это нечто большее, чем просто повышение квалификации. Coursera не
                        ставит никаких границ для обучения.</p>
                      <p class="card-text"><small class="text-muted" style="padding-left: 80%; font-size: 90%;">—
                          Chaitanya A.</small></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item" style="padding-left: 20%; max-width: 80%;">
              <div class="card mb-3">
                <div class="row g-0 ">
                  <div class="col-md-2">
                    <img src="img/face3.png" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-10 ">
                    <div class="card-body" style="padding-top: 10%;">
                      <p class="card-text">На Coursera я могу проходить курсы в любое удобное для меня время.</p>
                      <p class="card-text"><small class="text-muted" style="padding-left: 80%; font-size: 90%;">—
                          Chelsea R.</small></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container" style="padding-top: 5%; padding-bottom: 5%;">
      <div class="row" style="padding-bottom: 3%;">
        <div class="col-12">
          <div class="" style="font-size: 150% ">Пользователи, которым понравился этот курс, также просматривали:</div>
        </div>
      </div>
      <div id="carouselExampleIndicator" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-3">
                <a href="#">
                  <div class="card" style="height: 20rem;">
                    <img src="img/car1.png" class="card-img-top" alt="">
                    <div class="card-body">
                      <a class="card-title" style="color: rgb(31, 31, 31); font-size: 120%; text-decoration: none;">
                        <h5>Building Database Applications in PHP</h5>
                      </a>
                      <p class="card-text" style="text-decoration: none; color: rgb(102, 102, 102);">University of
                        Michigan</p>
                      <p class="card-text"><small class="text-muted" style="font-weight: bold;">1 КУРС</small></p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-md-3">
                <a href="#">
                  <div class="card" style="height: 20rem;">
                    <img src="img/car2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <a class="card-title" style="color: rgb(31, 31, 31); font-size: 120%; text-decoration: none;">
                        <h5>Web Applications for Everybody</h5>
                      </a>
                      <p class="card-text" style="text-decoration: none; color: rgb(102, 102, 102);">University of
                        Michigan</p>
                      <p class="card-text"><small class="text-muted" style="font-weight: bold;">КОЛИЧЕСТВО КУРСОВ:
                          4</small></p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-md-3">
                <a href="#">
                  <div class="card" style="height: 20rem;">
                    <img src="img/car3.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <a class="card-title" style="color: rgb(31, 31, 31); font-size: 120%; text-decoration: none;">
                        <h5>JavaScript, jQuery, and JSON</h5>
                      </a>
                      <p class="card-text"
                        style="text-decoration: none; color: rgb(102, 102, 102);  padding-top: 25px;">University of
                        Michigan</p>
                      <p class="card-text"><small class="text-muted" style="font-weight: bold;">1 КУРС</small></p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-md-3">
                <a href="#">
                  <div class="card" style="height: 20rem;">
                    <img src="img/car4.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <a class="card-title" style="color: rgb(31, 31, 31); font-size: 120%; text-decoration: none;">
                        <h5>Introduction to Structured Query Language (SQL)</h5>
                      </a>
                      <p class="card-text" style="text-decoration: none; color: rgb(102, 102, 102);">University of
                        Michigan</p>
                      <p class="card-text"><small class="text-muted" style="font-weight: bold;">1 КУРС</small></p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-3">
                <a href="#">
                  <div class="card" style="height: 20rem;">
                    <img src="img/car5.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <a class="card-title" style="color: rgb(31, 31, 31); font-size: 120%; text-decoration: none;">
                        <h5>Building a Dynamic Web App using PHP & MySQL</h5>
                      </a>
                      <p class="card-text" style="text-decoration: none; color: rgb(102, 102, 102);">Coursera Project
                        Network</p>
                      <p class="card-text"><small class="text-muted" style="font-weight: bold;">1 ПРОЕКТ С
                          КОНСУЛЬТАЦИЯМИ</small></p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-md-3">
                <a href="#">
                  <div class="card" style="height: 20rem;">
                    <img src="img/car6.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <a class="card-title" style="color: rgb(31, 31, 31); font-size: 120%; text-decoration: none;">
                        <h5>Analizando imágenes con Amazon Rekognition</h5>
                      </a>
                      <p class="card-text" style="text-decoration: none; color: rgb(102, 102, 102);">Coursera Project
                        Network</p>
                      <p class="card-text"><small class="text-muted" style="font-weight: bold;">1 ПРОЕКТ С
                          КОНСУЛЬТАЦИЯМИ</small></p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-md-3">
                <a href="#">
                  <div class="card" style="height: 20rem;">
                    <img src="img/car7.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <a class="card-title" style="color: rgb(31, 31, 31); font-size: 120%; text-decoration: none;">
                        <h5>Create a C# UI on Linux using MonoDevelop</h5>
                      </a>
                      <p class="card-text" style="text-decoration: none; color: rgb(102, 102, 102);">Coursera Project
                        Network</p>
                      <p class="card-text"><small class="text-muted" style="font-weight: bold;">1 ПРОЕКТ С
                          КОНСУЛЬТАЦИЯМИ</small></p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-md-3">
                <a href="#">
                  <div class="card" style="height: 20rem;">
                    <img src="img/car8.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <a class="card-title" style="color: rgb(31, 31, 31); font-size: 120%; text-decoration: none;">
                        <h5>Create an FPS Weapon in Unity (Part 1 - Revolver)</h5>
                      </a>
                      <p class="card-text" style="text-decoration: none; color: rgb(102, 102, 102);">Coursera Project
                        Network</p>
                      <p class="card-text"><small class="text-muted" style="font-weight: bold;">1 ПРОЕКТ С
                          КОНСУЛЬТАЦИЯМИ</small></p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicator"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicator"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>
  <hr>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
</body>

</html>