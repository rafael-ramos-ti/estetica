<?php

//se classe ja foi add nao sera inclusa novamente
require_once 'DAO.php';

class Cidade extends DAO {

    public function inserir($nome, $cep) {
        //prepara para a execução
        $sql = $this->db->prepare("INSERT INTO cidade(nome,cep) "
                . "VALUES (:nome,:cep)");
        //retorna a execução ---        
        return $sql->execute([':nome' => $nome, ':cep' => $cep]);
    }

    //listar o nome dos clientes em listarclientes.php
    public function encontrarNomeCodCidade() {
        // "prepare" prepara para a execução
        $sql = $this->db->prepare("SELECT nome,codCidade FROM cidade ORDER BY nome");
        // executa 
        $sql->execute();
        //retorna todas as linhas
        return $sql->fetchAll();
    }
    
    public function deletar($codCidade){
        $sql = $this->db->prepare("DELETE FROM cidade WHERE codCidade=:codCidade");
        return $sql->execute([":codCidade" => $codCidade]);
    }
    
    public function encontrarTudoPorNome() {
        // "prepare" prepara para a execução
        $sql = $this->db->prepare("SELECT * FROM cidade ORDER BY nome");
        // executa 
        $sql->execute();
        //retorna todas as linhas
        return $sql->fetchAll();
    }
    
    public function atualizar($codCidade, $nome, $cep) {
        //prepara a execução
        $sql = $this->db->prepare("UPDATE cidade "
                . "SET nome=:nome, cep=:cep "
                . "WHERE codCidade=:codCidade");
        //retorna a execução para o banco
        return $sql->execute([
                    ':nome' => $nome,
                    ':cep' => $cep,
                    ':codCidade' => $codCidade]);
    }
    
    public function encontrarPorCod($codCidade) {
        $sql = $this->db->prepare(
                "SELECT nome,cep FROM cidade WHERE codCidade=:codCidade");
        $sql->execute([":codCidade" => $codCidade]);
        return $sql->fetch();
    }
}
