<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="imgs/style.css">
</head>
<body>
<?php 
// tao ket noi den csdl
require_once 'db.php';

// tao cau lenh sql
$sqlQuery = "select * from posts";

// thu thap ket qua tra ve cua cau sql
$data = exeQuery($sqlQuery, true);

 ?>
 <table>
 	<tr>
 		<th>Id</th>
 		<th>Tiêu đề</th>
 		<th>Ảnh</th>
 		<th>Mô tả</th>
 		<th>Nội dung</th>
 		<th>Tác giả</th>
 		<th>Lượt xem</th>
 		<th>
 			<a href="add.php">Thêm</a>
 		</th>
 	</tr>
 	<?php foreach ($data as $post): ?>
 		<tr>
	 		<td><?= $post['id'] ?></td>
	 		<td><?= $post['title'] ?></td>
	 		<td>
	 			<img src="<?= $post['feature_image'] ?>" width="100">
	 		</td>
	 		<td><?= $post['short_desc'] ?></td>
	 		<td><?= $post['content'] ?></td>
	 		<td><?= $post['author'] ?></td>
	 		<td><?= $post['views'] ?></td>
	 		<td>
	 			<a href="update.php?id=<?= $post['id'] ?>">Cập nhật</a>
	 			<a href="remove.php?id=<?= $post['id'] ?>">Xóa</a>
	 		</td>
	 	</tr>
 	<?php endforeach ?>
 </table>
 </body>
</html>