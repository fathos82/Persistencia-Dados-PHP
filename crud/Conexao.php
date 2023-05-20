<?php
// conexao generica:

class Conexao {
    private $host = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $banco = "CLIENT";
    private $conexao;
  
    public function __construct() {
      $this->conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);
      if ($this->conexao->connect_error) {
        die("Falha na conexão: " . $this->conexao->connect_error);
      }
    }
  
    public function getConnection(): mysqli {
        return $this->conexao;
    }
}
// aquivo sepadardo generico:

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'tel24M20');
define('DB_NAME', 'curso_devmedia');
?>