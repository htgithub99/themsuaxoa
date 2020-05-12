<?php 
require_once 'db.php';

$id = $_GET['id'];
// lay du lieu tu db ra ngoai
$sql = "select * from posts where id = $id";

$post = exeQuery($sql, false);
// neu khong tim thay ban ghi trong db thoa man id
if(!$post){
	header('location: index.php');die;
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<form action="save-update.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $post['id'] ?>">
		<div>
			<label>Tiêu đề</label>
			<input type="text" name="title"
				value="<?= $post['title'] ?>" 
			>
		</div>
		<div>
			<?php if (isset($post['feature_image'])): ?>
			<div style="width: 200px; border: 1px solid #ccc">
				<img src="<?= $post['feature_image'] ?>" style="width: 100%">
			</div>
			<?php endif ?>
			<label>Ảnh đại diện</label>
			<input type="file" name="feature_image" accept="image/*">
		</div>

		<div>
			<label>Mô tả ngắn</label>
			<textarea name="short_desc" rows="10" cols="50"><?= $post['short_desc'] ?></textarea>
		</div>
		<div>
			<label>Nội dung</label>
			<textarea name="content" rows="20" cols="50"><?= $post['content'] ?></textarea>
		</div>
		<div>
			<label>Tác giả</label>
			<input type="text" name="author" value="<?= $post['author'] ?>">
		</div>
		<div>
			<button type="submit">Lưu</button>
		</div>
	</form>

</body>
</html>