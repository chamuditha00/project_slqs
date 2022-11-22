<?php include 'db_conn.php';
if(isset($_POST['submit']))
{   $id = $_POST['title_id'];
	$extension=array('jpeg','jpg','png','gif');
	foreach ($_FILES['image']['tmp_name'] as $key => $value) {
		$filename=$_FILES['image']['name'][$key];
		$filename_tmp=$_FILES['image']['tmp_name'][$key];
		echo '<br>';
		$ext=pathinfo($filename,PATHINFO_EXTENSION);

		$finalimg='';
		if(in_array($ext,$extension))
		{
			if(!file_exists('image/'.$filename))
			{
			move_uploaded_file($filename_tmp, 'image/'.$filename);
			$finalimg=$filename;
			}else
			{
				 $filename=str_replace('.','-',basename($filename,$ext));
				 $newfilename=$filename.time().".".$ext;
				 move_uploaded_file($filename_tmp, 'image/'.$newfilename);
				 $finalimg=$newfilename;
			}
			$creattime=date('Y-m-d h:i:s');
			//insert
			$insertqry="INSERT INTO `multiple-images`( `image_name`, `image_createtime`,`title_id`) VALUES ('$finalimg','$creattime','$id')";
			mysqli_query($conn,$insertqry);

			header('Location: done.php');
		}else
		{
			//display error
		}
	}
}
?>