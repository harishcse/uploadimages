<html>
<head>
	<title></title>
</head>
<body>
<form action ="a.php" method="POST"  enctype="multipart/form-data">

select <input type="file" name= "image" >
<input type="button" value="button" name="upload">
</form>
<?php 

if (isset($_POST('upload'))) {



	


	$image_name= $_FILES['image']['name'];
	$image_type= $_FILES['image']['type'];
	$image_size= $_FILES['image']['size'];
	$image_tmp_name= $_FILES['image']['tmp_name'];
	
	move_uploaded_file($image_tmp_name,"photos/$image_name");

	echo "image uploaded sucessfully";*/

}

 ?>
</body>
</html>
