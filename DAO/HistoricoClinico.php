<?php

require_once 'DAO.php';

class HistoricoClinico extends DAO {

    public function inserir($codCliente, $hi1, $hi2, $hi3, $hi4, $hi5, $hi6, $hi7, $hi8) {
        $sql = $this->db->prepare("INSERT INTO historicoclinico "
                . "(codCliente,hi1,hi2,hi3,hi4,hi5,hi6,hi7,hi8) "
                . "VALUES (:codCliente, :hi1, :hi2, :hi3, :hi4,:hi5,:hi6,:hi7,:hi8)");

        return $sql->execute([
                    ':codCliente' => $codCliente,
                    ':hi1' => $hi1,
                    ':hi2' => $hi2,
                    ':hi3' => $hi3,
                    ':hi4' => $hi4,
                    ':hi5' => $hi5,
                    ':hi6' => $hi6,
                    ':hi7' => $hi7,
                    ':hi8' => $hi8
        ]);
    }

}
