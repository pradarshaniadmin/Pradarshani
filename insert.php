<html>
<head>
	<title>INSERT CSV </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #00BFFF;
  color: white;
}

.topnav-right {
  float: right;
}

 </style>
 
 </head>

<body>



<div class="topnav">
  <a class="active" href="http://127.0.0.1/PRADARSHANI/HomePage1.html">PRADARSHANI</a>
  <a href="http://127.0.0.1/PRADARSHANI/Projects.html">Projects</a>
  <a href="#contact">About</a>
  <div class="topnav-right">
    <a href="#search">Search</a>
    <a href="#about">About</a>
  </div>
</div>

<?php
$con=mysqli_connect("localhost","root","","espoton");

ini_set('max_execution_time',0);
if($con)
{
	$file= $_FILES['csvfile']['tmp_name'];
	$handle=fopen($file,"r");
	$i=0;
	while(($cont=fgetcsv($handle,2024,",")) !==false)
	{
		$table=rtrim($_FILES['csvfile']['name'],".csv");
		if($i==0)
		{
	$timeStam=$cont[0];
	$elapsed=$cont[1];
	$label=$cont[2];
	$responseCode=$cont[3];
	$responseMessage=$cont[4];
	$threadName=$cont[5];
	$dataType=$cont[6];
	$success=$cont[7];
	$failureMessage=$cont[8];
	$bytes=$cont[9];
	$sentBytes=$cont[10];
	$grpThreads=$cont[11];
	$allThreads=$cont[12];
	$Latency=$cont[13];
	$IdleTime=$cont[14];
	$Connect=$cont[15];
$query="CREATE TABLE $table ($timeStam VARCHAR(50),$elapsed INT(50),$label VARCHAR(50),$responseCode VARCHAR(50),$responseMessage VARCHAR(50),$threadName VARCHAR(50),$dataType VARCHAR(50),$success VARCHAR(50),$failureMessage VARCHAR(50),$bytes INT(50),$sentBytes INT(50),$grpThreads INT(50),$allThreads INT(50),$Latency INT(50),$IdleTime INT(50),$Connect INT(50))";
		mysqli_query($con,$query);
		}
		else
		{
		$query="INSERT INTO $table ($timeStam,$elapsed,$label,$responseCode,$responseMessage,$threadName,$dataType,$success,$failureMessage,$bytes,$sentBytes,$grpThreads,$allThreads,$Latency,$IdleTime,$Connect)  VALUES('$cont[0]','$cont[1]','$cont[2]','$cont[3]','$cont[4]','$cont[5]','$cont[6]','$cont[7]','$cont[8]','$cont[9]','$cont[10]','$cont[11]','$cont[12]','$cont[13]','$cont[14]','$cont[15]')";
		
		mysqli_query($con,$query);
		}
		$i++;
	}
}		
else
{
	echo "connection failed";
}
?>
<h3><b><font color="orange">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp FILE IMPORTED SUCCESSFULLY</font></b></h3>
	</body>
	</html>