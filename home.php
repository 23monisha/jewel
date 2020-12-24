<?php 
error_reporting(0);
session_start(); ?>


<!DOCTYPE html>
<html>
<head>
	<style>
	body{
	background-image:url("img/pic.jpg");
	background-size: cover;
	background-position: center;
	
	}
	
.text{
	background:transparent;
	color:  #b30000;
	font-size: 15px;
	padding: 10px;
	border-radius: 10px;
	cursor: pointer;
	width: 300px;
	margin-left: 300px;
	margin-top: 300px;
}

.text:hover{
	background:black;
}

.text1{
	background:transparent;
	color:  #b30000;
	font-size: 15px;
	padding: 10px;
	border-radius: 10px;
	cursor: pointer;
	width: 300px;
	margin-left: 600px;
	margin-bottom: 400px;
}

.text1:hover{
	background:black;
}
.works{
	
	background:transparent;
	color:  #b30000;
	font-size: 15px;
	padding: 10px;
	border-radius: 10px;
	cursor: pointer;
	width: 120px;
	margin-right: 200px;
	
	
}
	
	</style>
</head>
<body>

	   <center><label style="color:#cca300;font-size:50px;text-align: center;">Hand craft Jewels</label></center>
<div class="container" style="width:342px;">
	 
	<div class="col-md-6" >
		<input type="button" value="Workers Login" class="works" onclick="window.location.href='index.php'">
	<label style="color: red;font-size:18px;margin-left:10px;">Worker: <?php echo $_SESSION['name'];?></label> <br> 
	
<form>
<input type="button" class="text" value="Raw Material Details" onclick="window.location.href='rmd.php'" />
<input type="button" class="text1" value="Worker Jewel Details" onclick="window.location.href='wjd.php'" />

</form>

</div></div></div></div></div>



</body>
</html>