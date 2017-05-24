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
		<label	for="nrVeiculo" >Nrº Veículo</label>
     	<input type="text" class="form-control" name="nrVeiculo" id="nrVeiculo" value="<?php if(isset($viewData->Model->getcodVeiculo())) echo  $viewData->Model->getcodVeiculo() ?>" />
	</div>
	
	<div class="form-group">
		<label	for="modelo" >Modelo</label>
     	<input type="text" class="form-control" name="modelo" id="modelo" value="<?php if(isset($viewData->Model->getModelo())) echo  $viewData->Model->getModelo() ?>" />
	</div>
	
	<div class="form-group">
		<label	for="valorBasico" >Valor básico</label>
     	<input type="text" class="form-control" name="valorBasico" id="valorBasico" value="<?php if(isset($viewData->Model->getValorBase())) echo  $viewData->Model->getValorBase() ?>" />
	</div>
		
	<fieldset>
		<legend>Acessórios</legend>
		
		<label for="airBag" class="radio-inline">
         AirBag <input name="airBag" id="airBag" value="<?php echo  $viewData->Model->hasAirBag()  ?>" type="radio"> 
        </label>
        
       <label for="direcaoHidraulica" class="radio-inline">
         Direções Hidraulicas <input name="direcaoHidraulica" id="direcaoHidraulica" value="<?php echo  $viewData->Model->hasDirecaoHidraulica()  ?>" type="radio"> AirBag
        </label>
                
        <label for="abs" class="radio-inline">
         Abs <input name="abs" id="abs" value="<?php echo  $viewData->Model->hasAbs()  ?>" type="radio"> AirBag
        </label>
		
		  <label for="gps" class="radio-inline">
         Gps <input name="gps" id="gps" value="<?php echo  $viewData->Model->hasGps()  ?>" type="radio"> AirBag
        </label>
		
	</fieldset>	
	
</form>


</body>
</html>
