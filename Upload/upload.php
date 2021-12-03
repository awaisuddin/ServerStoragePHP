<!DOCTYPE html>
<html>
	<body>
		<?PHP
		$filename = $_FILES['file']['name'];
		
		$location = "../Data/".$filename;
		
		
		if( move_uploaded_file($_FILES['file']['tmp_name'], $location)){
			echo '<p>File Uploaded Successfully</p>';
		}
		else{
			echo '<b>Error uploading file</b>';
		}
		
		?>
	</body>

</html>