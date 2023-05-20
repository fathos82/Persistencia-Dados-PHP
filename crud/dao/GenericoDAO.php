<?php
interface GenericoDAO {
    public function inserir(object $objc) : void;
    public function atualizar(object $objc) : void;
    public function deletar(int $id) : void;
    // public function listarTodos() : array;
    // public function buscarPorId(int $id) : ?object;
}
?>