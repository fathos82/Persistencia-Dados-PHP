<?php

class ClienteDTO{

    private int $idCliente;
    private String $nome;
    private int $cpf; //long
    private String $sexo;
    
    private EnderecoDTO $enderecoDTO;


	/**
	 * @return int
	 */
	public function getIdCliente(): int {
		return $this->idCliente;
	}

	/**
	 * @return string
	 */
	public function getNome(): string {
		return $this->nome;
	}
    /**
	 * @return int
	 */
	public function getCpf(): int {
		return $this->cpf;
	}

	/**
	 * @return string
	 */
	public function getSexo(): string {
		return $this->sexo;
	}
	/**
	 * @return mixed
	 */
	public function getEnderecoDTO() : EnderecoDTO {
		return $this->enderecoDTO;
	}

    /**
	 * @param int $idCliente 
	 * @return self
	 */
	public function setIdCliente(int $idCliente){
		$this->idCliente = $idCliente;
	}

	/**
	 * @param string $nome 
	 * @return self
	 */
	public function setNome(string $nome){
		$this->nome = $nome;
	}
    /**
	 * @param int $cpf 
	 * @return self
	 */
	public function setCpf(int $cpf){
		$this->cpf = $cpf;
	}
	/**
	 * @param string $sexo 
	 * @return self
	 */
	public function setSexo(string $sexo){
		$this->sexo = $sexo;
	}

	/**
	 * @param mixed $enderecoDTO 
	 * @return self
	 */
	public function setEnderecoDTO(EnderecoDTO $enderecoDTO){
		$this->enderecoDTO = $enderecoDTO;
	}
}
?>