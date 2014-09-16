<?php
include_once ("models/orcamento.class.php");
include_once ("models/orcamentoValidator.class.php");

class GmController {

	public function executeGet() {

		return new ViewData(new Orcamento(), array ());
	}

	public function executePost() {

		$orcamento = new Orcamento();
		$orcamento->setMoledo($_POST["modelo"]);
		$orcamento->setCodVeiculo($_POST["nrVeiculo"]);
		$orcamento->setValorBase($_POST["valorBase"]);
		$orcamento->setAirBag(isset ($_POST["airBag"]));
		$orcamento->setDirecaoHidraulica(isset ($_POST["direcaoHidraulica"]));
		$orcamento->setAbs(isset ($_POST["abs"]));
		$orcamento->setGps(isset ($_POST["gps"]));

		$validator = new OrcamentoValidator();
		$errors = validator->validate($orcamento);

		if (count($errors) > 0)
			return ViewData($orcamento, $errors);

		$orcamento->salvar();
	}

}
?>