<?php

require_once 'DAO.php';

class Consulta extends DAO {
    public function inserir($codCliente, $descricao, $tipo) {
        $sql = $this->db->prepare("INSERT INTO consulta "
                . "(codCliente, descricao, tipo) "
                . "VALUES (:codCliente, :descricao, :tipo)");

        return $sql->execute([
                    ':codCliente' => $codCliente,
                    ':descricao' => $descricao,
                    ':tipo' => $tipo]);
    }
}
