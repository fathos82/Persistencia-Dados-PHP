<?php
class LoginDTO{
    private int $id;
    private string $nome; 
    private string $email;
    private string $senha; 

    
    /**
	 * @return string
	 */
	public function getNome(): string {
		return $this->nome;
	}

	/**
	 * @return string
	 */
	public function getEmail(): string {
		return $this->email;
	}

	/**
	 * @return string
	 */
	public function getSenha(): string {
		return $this->senha;
	}

	/**
	 * @param int $id 
	 * @return self
	 */
	public function setId(int $id) {
		$this->id = $id;
	}

    /**
	 * @param string $nome 
	 * @return self
	 */
	public function setNome(string $nome) : void {
		$this->nome = $nome;
	}

	/**
	 * @param string $email 
	 * @return self
	 */
	public function setEmail(string $email) : void {
		$this->email = $email;
	}

	/**
	 * @param string $senha 
	 * @return self
	 */
	public function setSenha(string $senha) : void {
		$this->senha = $senha;
	}

	

	
}
?>