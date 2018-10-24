<!DOCTYPE html">
<html>
<head>
<meta charset="utf-8" />
    <title>Search</title>
    
</head>
<body>
    <form action="/search.php" method="POST">
        <input type = "text" name = "searchterm" placeholder = "search.." /><br/>
        <input type = "submit" name = "Submit" />
    </form>
</body>
</html>


<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
<form action="/hms/accommodations" method="GET"> 
  <div class="row">
    <div class="col-xs-6 col-md-4">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" id="txtSearch"/>
        <div class="input-group-btn">
          <button class="btn btn-primary" type="submit">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </div>
      </div>
    </div>
  </div>
</form>
