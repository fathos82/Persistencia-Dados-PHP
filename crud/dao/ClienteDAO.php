<?php
include ('GenericoDAO.php');
include ('../dto/ClienteDTO.php');
include ('../dto/EnderecoDTO.php');
include('../Conexao.php');

class ClienteDAO implements GenericoDAO{
    public String $sql;
    public function inserir(object $clienteDTO) : void{

        if (!($clienteDTO instanceof ClienteDTO)) throw new InvalidArgumentException('O objeto passado não é um ClienteDTO válido'); // uma forma de forçar a tipagem
        try {
        $chaveEnd = $this->inserirEndereco($clienteDTO->getEnderecoDTO());  
        $Conexao = new Conexao();
        $conn = $Conexao->getConnection(); 
        //  echo $conn; 
         // ver a questão da tipagem de dados com o alexandre.
        $sql = "INSERT INTO client_bd (NOME, CPF, SEXO, ENDERECO) ". 
        "VALUES (?, ?, ?, ?)"; 

        // $sql = "INSERT INTO client_bd (NOME, CPF, SEXO, ENDERECO) "+ 
        // "VALUES (?, ?, ?, ?)"; 

        $nome = $clienteDTO->getNome(); 
        $cpf = $clienteDTO->getCpf();
       $sexo = $clienteDTO->getSexo();

        $statement = mysqli_prepare($conn, $sql);

        // if (!$statement) throw new RuntimeException('Erro ao preparar a consulta: ' . mysqli_error($conn));
        
        mysqli_stmt_bind_param($statement,"sisi", $nome, $cpf, $sexo, $chaveEnd);
        mysqli_stmt_execute($statement);
        mysqli_close($conn);

        }catch (Exception $e){
            // $e.printStackTrace();
			// throw new PersistenciaExcpetion($e.getMessage(), $e);
        }
    }

    private function inserirEndereco(EnderecoDTO $enderecoDTO) : int{
        $chave = 0;

        try {
            $Conexao = new Conexao();
            $conn =$Conexao->getConnection();  
            $sql = "INSERT INTO endereco_bd (RUA, NUMERO, COMPLEMENTO, CIDADE, ESTADO)".
            "VALUES (?, ?, ?, ?, ?)";
            
            $rua = $enderecoDTO->getRua();
            $numero = $enderecoDTO->getNumero();
            $complemento = $enderecoDTO->getComplemento();
            $cidade = $enderecoDTO->getCidade();
            $estado = $enderecoDTO->getEstado();

            $statement = mysqli_prepare($conn, $sql);
            // if (!$statement) throw new RuntimeException('Erro ao preparar a consulta: ' . mysqli_error($conn)); USAR DPS

            
            

            mysqli_stmt_bind_param($statement, "sisss", $rua, $numero, $complemento, $cidade, $estado);
            mysqli_stmt_execute($statement);
            $chave = mysqli_insert_id($conn);
            mysqli_close($conn);

            return $chave;
           


        } catch (\Throwable $th) {
            //throw $th;
        }
       

        
    }
    public function atualizar(object $objc) : void{

    }
    public function deletar(int $id) : void{

    }
    // public function listarTodos() : array{
        

    // }
    // public function buscarPorId(int $id) : ?object{
        
    // }

}
$end = new EnderecoDTO();
$end->setRua("Rua Alcides Ferreira");
$end->setNumero(1919);
$end->setCidade("Imtubiaria");
$end->setComplemento("Perto da Demopi");
$end->setEstado("Goias"); 
$c1 = new  ClienteDTO();
$c1->setNome("Lucas");
$c1->setCpf(12345678911);
$c1->setSexo("M");
$c1->setEnderecoDTO($end);

$c1Dao = new ClienteDAO();
$c1Dao->inserir($c1);

?>