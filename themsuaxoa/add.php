<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<form action="save-add.php" method="post" enctype="multipart/form-data">
		<div>
			<label>Tiêu đề</label>
			<input type="text" name="title">
		</div>
		<div>
			<label>Ảnh đại diện</label>
			<input type="file" name="feature_image" accept="image/*">
		</div>

		<div>
			<label>Mô tả ngắn</label>
			<textarea name="short_desc" rows="10" cols="50"></textarea>
		</div>
		<div>
			<label>Nội dung</label>
			<textarea name="content" rows="20" cols="50"></textarea>
		</div>
		<div>
			<label>Tác giả</label>
			<input type="text" name="author">
		</div>
		<div>
			<button type="submit">Lưu</button>
		</div>
	</form>

</body>
</html>