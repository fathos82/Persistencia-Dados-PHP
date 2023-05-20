<?php

class EnderecoDTO {
    private int $id;
    private string $rua;
    private int $numero;
    private ?string $complemento;
    private string $cidade;
    private string $estado;


    // getters e setters
    public function getRua(): string {
        return $this->rua;
    }

    public function setRua(string $rua): void {
        $this->rua = $rua;
    }

    public function getNumero(): int {
        return $this->numero;
    }

    public function setNumero(int $numero): void {
        $this->numero = $numero;
    }

    public function getComplemento(): ?string {
        return $this->complemento;
    }

    public function setComplemento(?string $complemento): void {
        $this->complemento = $complemento;
    }

    public function getCidade(): string {
        return $this->cidade;
    }

    public function setCidade(string $cidade): void {
        $this->cidade = $cidade;
    }

    public function getEstado(): string {
        return $this->estado;
    }

    public function setEstado(string $estado): void {
        $this->estado = $estado;
    }
}

?>
