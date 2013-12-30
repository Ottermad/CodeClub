<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SHS Code Club</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
	<div class="container">
		<header class="page-header">
      <ul class="nav nav-pills pull-right">
        <li class="<?php if ($pagetitle == "Home") { echo "active";}?>"><a href="index.php">Home</a></li>
        <li class="<?php if ($pagetitle == "SQL") { echo "active";}?>"><a href="sql.php"  >SQL Editor</a></li>
        <li class="<?php if ($pagetitle == "Learn") { echo "active";}?>"><a href="learn.php" >Learn SQL</a></li>
      </ul>
      <h3>SHS Code Club - SQL Frontend</h3>
    </header>
    <div class="row jumbotron">
      <h1>My SQL - Everywhere</h1>
      <p>An onlien MySQL Server and Frontend that you can use anywhere there is wifi!</p>
      <button class="btn btn-success btn-lg">Start SQLing</button>
    </div>

    
    <div class="row">
        <p class="col-xs-12 copy">&copy; <?php echo date('Y');?> Shipston High School. All Rights Reserved.</p>
    </div>
  </div>    
</body>
</html>