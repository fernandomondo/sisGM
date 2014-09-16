<?php
include_once ("models/orcamento.class.php");
include_once ("models/orcamentoValidator.class.php");

class GmController {

	public function executeGet() {

		return new ViewData(new Orcamento(), array ());
	}

	public function executePost() {

		$orcamento = new Orcamento();
		$orcamento->setMarca($_POST[""]);

		$validator = new OrcamentoValidator();
		$errors = validator . validate(orcamento);

		if (count($errors) > 0)
			return ViewData($orcamento, $errors);

	}

}
?>