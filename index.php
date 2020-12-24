<?php
session_start();
include_once "db.php";
$moni=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
/*$db=mysqli_connect("localhost","root","","moni");
if($db){
	echo "Connected ";
}
$query="SELECT * FROM worker";
$result=mysqli_query($db,$query);
while($row=mysqli_fetch_assoc($result)){
	echo $row['name']."<br>";
}*/
$conn=new connect();
ini_set('display_errors',0);


$query=$conn->queryall("SELECT * FROM worker");
//print_r($query);
if($_POST['submit']=='Login'){
	
	$worker=$_POST['name'];
	//$row=mysql_fetch($db,"select name from worker");
	$_SESSION['name'] = $worker;
	if ($worker=='name') {
			header("location:home.php");
		exit();
	}
	else{
		// echo "invalid";
		header("location:home.php");
	}
}
for($i=0;$i<count($moni);$i++){
	if($i==0)
		$conn->execute("INSERT INTO worker(name) VALUES('".$moni[$i+12]."')");
	elseif($i==1)
		$conn->execute("INSERT INTO worker(name) VALUES('".$moni[$i+11].$moni[$i+13]."')");
	elseif($i==2)
		$conn->execute("INSERT INTO worker(name) VALUES('".$moni[$i+10].$moni[$i+12].$moni[$i+11]."')");
	elseif($i==3)
		$conn->execute("INSERT INTO worker(name) VALUES('".$moni[$i+9].$moni[$i+11].$moni[$i+10].$moni[$i+5]."')");
	elseif($i==4)
		$conn->execute("INSERT INTO worker(name) VALUES('".$moni[$i+8].$moni[$i+10].$moni[$i+9].$moni[$i+4].$moni[$i+14]."')");
	elseif($i==5) 
		$conn->execute("INSERT INTO worker(name) VALUES('".$moni[$i+7].$moni[$i+9].$moni[$i+8].$moni[$i+3].$moni[$i+13].$moni[$i+2]."')"); 
	elseif($i==6) 
		$conn->execute("INSERT INTO worker(name) VALUES('".$moni[$i+6].$moni[$i+8].$moni[$i+7].$moni[$i+2].$moni[$i+12].$moni[$i+1].$moni[$i-6]."')"); 
	elseif($i==7) 
		$conn->execute("INSERT INTO worker(name) VALUES('".$moni[$i+5].$moni[$i+7].$moni[$i+6].$moni[$i+1].$moni[$i+11].$moni[$i+0]."')"); 
	elseif($i==8) 
		$conn->execute("INSERT INTO worker(name) VALUES('".$moni[$i+4].$moni[$i+6].$moni[$i+5].$moni[$i+0].$moni[$i+10]."')"); 
	elseif($i==9)
		$conn->execute("INSERT INTO worker(name) VALUES('".$moni[$i+3].$moni[$i+5].$moni[$i+4].$moni[$i-1]."')"); 
	elseif($i==10)
		$conn->execute("INSERT INTO worker(name) VALUES('".$moni[$i+2].$moni[$i+4].$moni[$i+3]."')"); 
	elseif($i==11) 
		$conn->execute("INSERT INTO worker(name) VALUES('".$moni[$i+1].$moni[$i+3]."')"); 
	elseif($i==12) 
		$conn->execute("INSERT INTO worker(name) VALUES('".$moni[$i+0]."')");
}
?>






<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<style>
body{
	background-image:url("img/back.jpg");
	background-size: cover;
	background-position: center;
	}
	.panel{
 			width: 320px;
 			height: 200px;
 			background:rgba(0,0,0,0.5);
 			color:#fff ;
 			margin-top: 50px;
 			position: absolute;
 			transform: translate(-50%);
}
.text{
	border: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	color: #fff;
	font-size: 16px;
}
.form-control{
	border: none;
	outline: none;
	background:#c65353;
	color: #fff;
	font-size: 14px;
}

</style>
</head>

<body>

 
 <div class="container" style="width:342px;">


  <div class="panel">
      <div class="panel-heading">Worker IN</div>
      <div class="panel-body">
	  
	<div class="col-md-6" >
	  
	  <form method="POST">

	<label> Worker Name:</label><br><br>
	 <input type="text" placeholder="Enter Name" name="name"  class="text"><br><br>
      <input type="Submit" name="submit"  class="form-control" value="Login" >
	  </form>
	  </div>
	  </div>
	  </div>
	  </div>
	  </div>
	  
	  </body>
	  </html>