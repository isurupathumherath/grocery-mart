<html lang="en">
<head>
<style>
input[type=text] {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

.button1 {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 10px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}


.button {
  position: relative;
  background-color: #4CAF50;
  border: none;
  font-size: 28px;
  color: #FFFFFF;
  padding: 20px;
  width: 200px;
  text-align: center;
  -webkit-transition-duration: 0.4s;
  transition-duration: 0.4s;
  text-decoration: none;
  overflow: hidden;
  cursor: pointer;
}

.button:after {
  content: "";
  background: #90EE90;
  display: block;
  position: absolute;
  padding-top: 300%;
  padding-left: 350%;
  margin-left: -20px!important;
  margin-top: -120%;
  opacity: 0;
  transition: all 0.8s
}

.button:active:after {
  padding: 0;
  margin: 0;
  opacity: 1;
  transition: 0s
}

h1 {
  font-family: Lucida Console;
  text-align: center;
  text-transform: uppercase;
  color: #4CAF50;
}
</style>
<script>
function previewFile() {

  var preview = document.querySelector('img');
  var file = document.querySelector('input[type=file]').files[0];
  var reader = new FileReader();

  reader.addEventListener("load", function() {
    console.log('before preview');
    preview.src = reader.result;
    console.log('after preview');
  }, false);


if (file) {
    console.log('inside if');
    reader.readAsDataURL(file);
  } else {
    console.log('inside else');
  }
}
</script>
</head>

<h1><ins> Upload a Photo </ins></h1>

<?php 
include("config.php"); 

if(isset($_POST['but_upload'])){ 
	$barcode = mysqli_real_escape_string($link, $_REQUEST['barcode']);
	$name = $_FILES['file']['name']; 
	$target_dir = "upload/"; 
	$target_file = $target_dir . basename($_FILES["file"]["name"]); 
	
	// Select file type 
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); 
	
	// Valid file extensions 
	$extensions_arr = array("jpg","jpeg","png","gif"); 
	
	// Check extension 
	if( in_array($imageFileType,$extensions_arr) ){ 
	
	// Insert record 
	$query = "insert into images(barcode, name) values('$barcode', '".$name."')"; 
	if(mysqli_query($link,$query)){
		header("location: ");
}	else{
		echo "ERROR: Could not able to execute. " . mysqli_error($link);
}
	
	// Upload file 
	move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name); 
	}
} 

		

?> 


	<form method="post" action="" enctype='multipart/form-data' align="center"> 
	  Barcode of the item:
		<input type="text" name="barcode" required> <br><br><br>
	  
	  <table border="1" align="center">
	  <tr style="text-align: center">
	  <td>
	  <img src="" alt="Image Preview" width="200px" height="300px" /><br><br><br>
	  <input type='file' name='file' onchange="previewFile()" /><br><br><br>
	  </td>
	  </table>
	  <br><br>
		<button class="button" type="submit" name='but_upload' value='Upload'>Upload</button>
		
	</form>
	<a href="additem.php"><center><button class="button1"><span>Back</span></button></center></a>
	<a href="welcome.php"><center><button class="button1"><span>Main Menu</span></button></center></a>

</html>