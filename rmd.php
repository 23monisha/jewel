<?php
error_reporting(0);
session_start();
$_SESSION['weight']=$_POST['weight'];
$_SESSION['date']=$_POST['date'];
$_SESSION['purity']=$_POST['purity'];
if($_POST['submit']=='submit'){
	header("location:rmdetail.php");

}

?>




<!DOCTYPE html>
<html>
<head>
	<style>
	body{
	background-image:url("img/one.jpg");
	background-size: cover;
	background-position: 50% 80%;
	background-attachment: fixed;
	}
	.panel{
 			width: 320px;
 			height: 400px;
 			background:rgba(0,0,0,0.5);
 			color:#fff ;
 			margin-top: 100px;
 			margin-left: 400px;
 			padding: 18px;
 		
}
.text{
	border: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	color: #fff;
	font-size: 15px;
	padding: 15px;
}
.back{
	background:transparent;
	color:  #b30000;
	font-size: 18px;
	padding: 10px;
	border-radius: 10px;
	cursor: pointer;
	width: 100px;
	margin-left: 20px;
	margin-top: 10px;
}
.back:hover{
	background:#333;
}
.form-control{
	border: none;
	outline: none;
	background:#c65353;
	color: #fff;
	font-size: 14px;
	padding: 10px;

}
.text1{
	border:1px solid #fff;
	background: transparent;
	font-size: 17px;
	color: white;
	margin-left: 150px;
	padding: 8px;
	width: 70px;

}
	
	</style>
</head>
<body>
	<input type="button" class="back" value="Home" onclick="window.location.href='home.php'">
<div class="container" style="width:342px;">
<div class="panel">
      <div class="panel-heading" style="text-align: center; padding: 12px;font-size:20px;">Raw Material Details</div><br>
      <div class="panel-body">
	  
	<div class="col-md-6" >
	  
	  <form method="POST">
	  	<label style="font-size: 18px;">Date</label><br>
	  	<input type="Date" name="date" class="text" placeholder="Date"><br><br>
	<label style="font-size: 18px;"> Weight(grams)</label><br>
	 <input type="number" placeholder="Weight in grams" name="weight" class="text"><br><br>
    <label style="font-size: 18px;"> Purity</label><br> <input type="number" placeholder="Purity" name="purity" class="text"><br><br>
    <input type="Submit" name="submit"   class="form-control" value="submit"  >
     <!-- <input type="button" class="text1" value="View" onclick="window.location.href='rmdetail.php'" />
 -->
	  
	  </form>

</div></div></div></div></div>
</body>
</html>