<?php

include_once ("controllers/gmController.class.php");

$controller = new GMController();
$viewData;
if($_SERVER['REQUEST_METHOD'] === 'POST')
	$viewData = $controller->executePost();
else
	$viewData = $controller->executeGet();	
 ?>
 
<!DOCTYPE>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="en" />	
	<title>Orçamento</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>

<form action="index.php" method="post">
	
	<div class="form-group">
	</div>
	
	<div class="form-group">
	</div>
	
	<div class="form-group">
	</div>
	
	<div class="form-group">
	</div>
	
	
	
</form>


</body>
</html>