<?php
namespace PapelHigienico;

class Papel {

	/**
	 * Quantidade de metros disponivel para usar.
	 * 
	 * @var integer
	 */
	private $metros = 1000;

	/**
	 * Tenho Papel?
	 * @return bool return true se tiver papel para usar
	 */
	public function tenhoPapel()
	{
		return $this->metros > 0;
	}

	/**
	 * Limpar Borrada
	 * @return true
	 */
	public function limparBorrada ()
	{
		if(!$this->tenhoPapel()) return false;

		return $this->gastarPapel(100);
	}

	/**
	 * Gastar papel do nosso rolo
	 * @param  integer $cumprimento em cm.
	 * @return true              
	 */
	public function gastarPapel($cumprimento = 1)
	{
		$this->metros = $this->metros - $cumprimento;
		return true;
	}

	/**
	 * Trocar Rolo
	 * @return boolean
	 */
	public function trocarRolo()
	{
		$this->metros = 1000;
		return true;
	}
}