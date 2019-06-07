<?php

//se dao ja foi chamado nao sera inicializado novamente
require_once 'DAO.php';

class HabitosDiarios extends DAO {

    public function inserir($codCliente,$ha1, $ha2, $ha3, $ha4, $ha5, $ha6, $ha7, $ha8, $ha9, $ha10, $ha11, $ha12,
                            $ha13, $ha14, $ha15, $ha16) {
        //prepara para a execução
        $sql = $this->db->prepare("INSERT INTO habitosdiarios("
                . "codCliente,ha1,ha2,ha3,ha4,ha5,ha6,ha7,ha8,ha9,ha10,ha11,ha12,ha13,ha14,ha15,ha16)"
                . " VALUES (:codCliente,:ha1,:ha2,:ha3,:ha4,:ha5,:ha6,:ha7,:ha8,:ha9,:ha10,:ha11,:ha12,:ha13,:ha14,"
                . ":ha15,:ha16)");
        //retorna a execução
        return $sql->execute([':codCliente' => $codCliente,':ha1' => $ha1, ':ha2' => $ha2, ':ha3' => $ha3, 
            ':ha4' => $ha4, ':ha5' => $ha5,':ha6' => $ha6, ':ha7' => $ha7, ':ha8' => $ha8, ':ha9' => $ha9,
            ':ha10' => $ha10,':ha11' => $ha11, ':ha12' => $ha12, ':ha13' => $ha13, ':ha14' => $ha14,
            ':ha15' => $ha15, ':ha16' => $ha16
        ]);
    }
    

}
