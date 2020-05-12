<?php 
require_once "db.php";
$title = $_POST['title'];
$short_desc = $_POST['short_desc'];
$content = $_POST['content'];
$author = $_POST['author'];
// luu anh
$file = $_FILES['feature_image'];
$filename = "";

if($file['size'] > 0){
	$filename = 'imgs/' . uniqid() . '-' . $file['name'];
	move_uploaded_file($file['tmp_name'], $filename);
}

$sqlQuery = "insert into posts 
				(title, short_desc, content, author, views, feature_image)
			values
				('$title', '$short_desc', '$content', '$author', 1, '$filename')";

exeQuery($sqlQuery);

header('location: index.php');
 ?>