	<form method="post" enctype="multipart/form-data" name="formUploadFile" action="?">      
		<label>Select files to upload:</label>
		<input type="file" name="files1" multiple="multiple" />
		<input type="submit" value="Upload File" name="submit"/>
	</form>


	<?php 
//check dir
	if(isset($_POST["submit"])) {
		$target_dir = 'img/';
		if(!file_exists($target_dir)){
			mkdir($target_dir,0777);
			echo 'สร้างแล้ว';
			exit;
		}else{
			echo $target_dir.'มีอยู่แล้ว';
		}

		$target_file = $target_dir.basename($_FILES['files1']['name']);
		if (move_uploaded_file($_FILES["files1"]["tmp_name"], $target_file)) {
			echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}

	?>