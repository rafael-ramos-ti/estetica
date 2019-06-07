<?php

//se classe DAO.php já foi incluido não será incluido novamente
require_once 'DAO.php';

class Clientes extends DAO {

    //listar o nome dos clientes em listarclientes.php
    public function encontrarTudoPorNome() {
        // "prepare" prepara para a execução
        $sql = $this->db->prepare("SELECT * FROM clientes ORDER BY nome");
        // executa 
        $sql->execute();
        //retorna todas as linhas
        return $sql->fetchAll();
    }

    //inserir dados de novos clientes na tabela clientes
    public function inserir($nome, $fone, $dataNasc, $codCidade) {
        //prepara para a execução
        
        $sql = $this->db->prepare("INSERT INTO clientes(nome,fone,dataNasc,codCidade) "
                . "VALUES (:nome,:fone,:dataNasc,:codCidade)");
        //retorna a execução ---        pegar data do sistema
        if($sql->execute([':nome' => $nome,
                    ':fone' => $fone,
                    ':dataNasc' => $dataNasc,
                    ':codCidade' => $codCidade
        ]))
            return $this->db->lastInsertId();
        else 
            return FALSE;
    }

    public function atualizar($codCliente, $nome, $fone, $dataNasc, $codCidade) {
        //prepara a execução
        $sql = $this->db->prepare("UPDATE clientes "
                . "SET nome=:nome, fone=:fone, dataNasc=:dataNasc, codCidade=:codCidade "
                . "WHERE codCliente=:codCliente");
        //retorna a execução para o banco
        return $sql->execute([
                    ':nome' => $nome,
                    ':fone' => $fone,
                    ':dataNasc' => $dataNasc,
                    ':codCidade' => $codCidade,
                    ':codCliente' => $codCliente]);
    }

    
    public function deletar($codCliente) {
        $sql = $this->db->prepare("DELETE FROM habitosdiarios WHERE codCliente=:codCliente ;"
                                 . "DELETE FROM historicoclinico WHERE codCliente=:codCliente ;" 
                                 . "DELETE FROM tmedicinaestetica WHERE codCliente=:codCliente ;"
                                 . "DELETE FROM avaliacaofacial WHERE codCliente=:codCliente ;"
                                 . "DELETE FROM consulta WHERE codCliente=:codCliente ;"
                                 . "DELETE FROM clientes WHERE codCliente=:codCliente ;"
                );

        return $sql->execute([':codCliente' => $codCliente]);
    }

    public function encontrarPorNome($q) {
        $sql = $this->db->prepare(
                "SELECT * "
                . "FROM clientes "
                . "WHERE nome LIKE :q "
                . "ORDER BY nome");
        $sql->execute([":q" => '%' . $q . '%']);
        return $sql->fetchAll();
    }
    

    public function encontrarPorCod($codCliente) {
        $sql = $this->db->prepare(
                "SELECT CL.*, CI.nome as nomeCid FROM clientes CL INNER JOIN cidade CI ON CL.codCidade = CI.codCidade"
                ." WHERE codCliente=:codCliente");
        $sql->execute([":codCliente" => $codCliente]);
        return $sql->fetch();
    }
    
    
    //////////---------- Listagem da ficha de clientes ---------------/////////
    
    public function encontrarHabitosDiarios($codCliente) {
        $sql = $this->db->prepare("SELECT HA.* FROM clientes C RIGHT JOIN habitosdiarios HA "
                . "ON C.codCliente = HA.codCliente WHERE C.codCliente=:codCliente");
        $sql->execute([":codCliente" => $codCliente]);
        return $sql->fetch();
    }
    
    public function encontrarHistoricoClinico($codCliente) {
        $sql = $this->db->prepare("SELECT HI.* FROM clientes C RIGHT JOIN historicoclinico HI "
                . "ON C.codCliente = HI.codCliente WHERE C.codCliente=:codCliente");
        $sql->execute([":codCliente" => $codCliente]);
        return $sql->fetch();
    }
    
    public function encontrarTMedicinaEstetica($codCliente) {
        $sql = $this->db->prepare("SELECT ME.* FROM clientes C RIGHT JOIN tmedicinaestetica ME "
                . "ON C.codCliente = ME.codCliente WHERE C.codCliente=:codCliente");
        $sql->execute([":codCliente" => $codCliente]);
        return $sql->fetch();
    }
    
    public function encontrarAvaliacaoFacial($codCliente) {
        $sql = $this->db->prepare("SELECT AV.* FROM clientes C RIGHT JOIN avaliacaofacial AV "
                . "ON C.codCliente = AV.codCliente WHERE C.codCliente=:codCliente");
        $sql->execute([":codCliente" => $codCliente]);
        return $sql->fetch();
    }
    public function encontrarConsultas($codCliente) {
        $sql = $this->db->prepare("SELECT CO.* FROM clientes C RIGHT JOIN consulta CO "
                . "ON C.codCliente = CO.codCliente WHERE C.codCliente=:codCliente");
        $sql->execute([":codCliente" => $codCliente]);
        return $sql->fetchAll();
    }
    public function encontrarClientePorCod($codCliente) {
        $sql = $this->db->prepare("SELECT C.dataNasc, C.fone, C.dataCadastro, CI.nome " 
                . "FROM clientes C INNER JOIN cidade CI ON C.codCidade = CI.codCidade "
                . "WHERE C.codCliente=:codCliente");
        $sql->execute([":codCliente" => $codCliente]);
        return $sql->fetch();
    }
}
