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
          	 	<li class="<?php if ($pagetitle == "About") { echo "active";}?>"><a href="about.php"  >About</a></li>
          		<li class="<?php if ($pagetitle == "Code") { echo "active";}?>"><a href="code.php" >Code</a></li>
        	</ul>
           <h3>SHS Code Club</h3>
    	</header>