<?php
include_once ("models/orcamento.class.php");

class OrcamentoValidator {

	/*
	 * 
	 * */
	public function validate($orcamento) {

		$errors = array ();

		if ($orcamento->getCodVeiculo() < 0)
			$errors["nrVeiculo"] = "numero incorreto";

		if ($orcamento->getValorBase() < 0)
			$errors["valorBase"] = "valor base incorreto";

		$modelo = $orcamento->getModelo();
		if (!isset ($modelo))
			$errors["modelo"] = "modelo incorreto";

		return $errors;

	}

}
?>
