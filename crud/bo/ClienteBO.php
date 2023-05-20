<?php
class ClienteBO{
    
    public function validarNome(String $nome): bool{
        $ehValido = true;

        if ($nome == "" || $nome == null) {
            $ehValido = false;
            //exception campo obrigatorio
        }elseif (strlen($nome) > 30){
            $ehValido = false;
            //exception  de maximo de chars
        }
        return $ehValido;
    }

    public function validarCpf(String $cpf) : bool{
        // cogitar Algoritmo de Validação

        $normalizadoCpf = preg_replace('/[^0-9]/', '', $cpf); // remove os caracteres especiais
        $ehValido = true;
        if($normalizadoCpf == "" || $normalizadoCpf == null) {
            $ehValido = false;
            // exception de campo obrigatorio
        }else if (strlen($normalizadoCpf) != 11) {
            $ehValido = false;
            // exception de obrigatorio 11 chars
        }else if(!preg_match('/^[0-9]+$/', $normalizadoCpf)) {
            $ehValido = false;
            // exception digite um valor valido para cpf 
        }
        return $ehValido;
        
    }
    public function vadalidarEndereco(EnderecoDTO $enderecoDTO) : bool{
        $ehValido = true; 
        if ($enderecoDTO->getRua() == null || $enderecoDTO->getRua() == "") {
            //trhow
            $ehValido = false;
        }else if ($enderecoDTO->getNumero() == null || $enderecoDTO->getRua() == 0) {
            //trhow
            $ehValido = false;
        }else if ($enderecoDTO->getRua() == null || $enderecoDTO->getRua() == "") {
            //trhow
            $ehValido = false;
        }else if ($enderecoDTO->getRua() == null || $enderecoDTO->getRua() == "") {
            //trhow
            $ehValido = false;
        }
        return $ehValido;

    }
}
$cpf = "123.456.789-3e";

$c1 = new ClienteBO();
echo $c1->validarCpf($cpf);



?>