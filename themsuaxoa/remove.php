<?php 

$id = $_GET['id'];

// tao ket noi den csdl
$conn = new PDO('mysql:host=127.0.0.1;dbname=pt14111;charset=utf8', 'root', '');

$sqlQuery = "delete from posts where id = $id";

// nap cau sql vao trong ket noi
$stmt = $conn->prepare($sqlQuery);

// thuc thi cau lenh sql voi csdl
$stmt->execute();

header('location: index.php');

 ?>