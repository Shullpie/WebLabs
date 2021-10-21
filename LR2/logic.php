<?php
$host = '127.0.0.1';
$db_name = 'internet_courses';
$user = 'root';
$pass = '';

$connect = "mysql:host=$host; dbname=$db_name"; // Подключение к БД

$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$pdo = new PDO($connect, $user, $pass, $opt);
$query_arr = array();

$lect = $pdo -> query("SELECT * FROM lecturers"); // Для выпадающей формы
$price_min = ''; // Значения в формах
$price_max = '';
$c_name = '';
$c_program = '';
$l_id = '';

$sql = "SELECT courses.id, img_path, courses.name, program, cost, lecturers.name  as lecturer
        FROM courses
        INNER JOIN lecturers ON courses.id_lecturer=lecturers.id
        WHERE courses.id > 0";

if (isset($_POST['price1']) and trim($_POST['price1']) !== '') // Фильтр по цене(снизу)
{
    $sql.= " AND cost >= ?";
    $query_arr[] = $_POST['price1'];
    $price_min = $_POST['price1'];
}

if (isset($_POST['price2']) and trim($_POST['price2']) !== '') // Фильтр по цене(сверху)
{
    $sql.= " AND cost <= ?";
    $query_arr[] = $_POST['price2'];
    $price_max = $_POST['price2'];
}

if (isset($_POST['course_name']) and trim($_POST['course_name']) !== '') // Фильтр по названию курса
{
    $sql.= " AND LOCATE(?, courses.name)";
    $query_arr[]=$_POST['course_name'];
    $c_name = $_POST['course_name'];
}

if (isset($_POST['course_program']) and trim($_POST['course_program']) !== '') // Фильтр по программе курса
{
    $sql.= " AND LOCATE(?, program)";
    $query_arr[] = $_POST['course_program'];
    $c_program = $_POST['course_program'];
}

if (isset($_POST['lecturer_name']) and trim($_POST['lecturer_name'])!=='') // Фильтр по преподавателю
{
    $sql.=" AND lecturers.id = ?";
    $query_arr[]=$_POST['lecturer_name'];
    $l_id = $_POST['lecturer_name'];
}

$rez = $pdo -> prepare($sql);
$rez -> execute($query_arr);
?>