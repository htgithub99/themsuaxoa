<?php 
require_once "db.php";
$id = $_POST['id'];

$sql = "select * from posts where id = $id";
$post = exeQuery($sql);
if(!$post){
	header('location: index.php');die;
}

$title = $_POST['title'];
$short_desc = $_POST['short_desc'];
$content = $_POST['content'];
$author = $_POST['author'];
// luu anh
$file = $_FILES['feature_image'];
$filename = $post['feature_image'];

if($file['size'] > 0){
	$filename = 'imgs/' . uniqid() . '-' . $file['name'];
	move_uploaded_file($file['tmp_name'], $filename);
}

$sqlQuery = "update posts 
				set 
						title = '$title',
						short_desc = '$short_desc',
						content = '$content',

						author = '$author', 
						feature_image = '$filename'
				where id= $id";

exeQuery($sqlQuery);

header('location: index.php');
 ?>