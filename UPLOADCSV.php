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

<div class="container">	

<ul class="nav navbar-nav navbar-left"><li><i class=><font size="4"></i></a></li>
<a href="http://127.0.0.1/PRADARSHANI/HomePage1.html" class="navbar-brand" href="#" style="color: black;" ><font size="4">HomePage1</a></font>

<a href="http://127.0.0.1/PRADARSHANI/Projects.html" class="navbar-brand" href="#" style="color: black;" ><font size="4"> >>Projects </a></font>

<a href="http://127.0.0.1/PRADARSHANI/eSpoton.html" class="navbar-brand" href="#" style="color: black;" ><font size="4"> >> eSpoton </a></font>

</head><br><br>

<body>
<p><h3><b><font color ="Orange" >UPLOAD YOUR CSV FILE BELOW</font></b></h3></p><br><br>

<form action="insert.php" method="post" enctype="multipart/form-data">
<input type="file"  name="csvfile" required="required" />
<input type="submit" value="upload" />

</form>
</body>
</html>