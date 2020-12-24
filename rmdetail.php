 <?php
 session_start();
$value=$_SESSION['weight']*($_SESSION['purity']/100);




?>
 
<html><!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
	
.text{
	background:transparent;
	color:  #b30000;
	font-size: 15px;
	padding: 10px;
	border-radius: 10px;
	cursor: pointer;
	width: 100px;
	margin-left: 20px;
	margin-top: 10px;
}

.text:hover{
	background:#ff4d4d;
}

body{
	background-image:url("img/back.jpg");
	background-size: cover;
	background-position: 50% 80%;
	background-attachment: fixed;
	}
table, th, td {

    border: 1px solid BLUE;
	background-color:#ffbf80;
}
</style>
<center ><h1 >RMD Details</h1></center>
<input type="button" class="text" value="Back" onclick="window.location.href='rmd.php'" />

<body>
<center>

<table class="table">
<thead>
<tr>
	
	<th  style="background-color: #66b3ff;">DATE</th>
	<th  style="background-color: #66b3ff;">WEIGHT</th>
	<th style="background-color: #66b3ff;">PURITY</th>
	<th style="background-color: #cccc00;">ACTUAL WEIGHT</th>
	
</tr>
</thead>
<tbody>
 
	
	
<tr>	
	<td><?php echo $_SESSION['date'];?></td>
	<td><?php echo $_SESSION['weight'];?></td> 
	<td><?php echo $_SESSION['purity'];?></td>
	<td><?php echo $value?></td>  
 </tr>
</tbody>
</table>
</center>
</body>
</html>