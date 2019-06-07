<?php

require_once 'DAO.php';

class TMedicinaEstetica extends DAO{

    public function inserir($codCliente, $me1, $me2, $me3, $me4, $me5, $me6) {
        //prepara para a execução
        $sql = $this->db->prepare("INSERT INTO tmedicinaestetica ("
                . "codCliente,me1,me2,me3,me4,me5,me6) "
                . " VALUES (:codCliente,:me1,:me2,:me3,:me4,:me5,:me6)");
        //retorna a execução
        return $sql->execute([':codCliente' => $codCliente, ':me1' => $me1, ':me2' => $me2, ':me3' => $me3,
                    ':me4' => $me4, ':me5' => $me5, ':me6' => $me6
        ]);
    }

}
