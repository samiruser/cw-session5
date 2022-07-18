<?php

$user_name = $_POST['user_name'];

$picture = $_FILES['user_picture'];

$file_name = $picture['name'];
$file_tmp_name = $picture['tmp_name'];
$file_type = $picture['type'];
$file_size = $picture['size'];


if($file_type != 'image/jpeg' && $file_type != 'image/png'){
	echo '<p style="color:red">Only Images are allowed!</p>';
}

$max_size = 500 * 1024;

// 500 KB is allowed 
if($file_size > $max_size){
	echo '<p style="color:red">Max file size is 500 KB!</p>';
}


move_uploaded_file($file_tmp_name, 'storage/'. $file_name);


?>

	
	
<a href="delete.php?filename=<?php echo $file_name ?>">Delete</a>

