<?php

require_once 'DAO.php';

class AvaliacaoFacial extends DAO{
    
       public function inserir($codCliente, $av1,$av2,$av3,$av4,$av5,$av6,$av7,$av8,$av9,$av10,$av11,$av12,$av13,$av14,
               $av15,$av16,$av17,$av18,$av19,$av20,$av21,$av22,$av23,$av24,$av25,$av26,$av27,$av28,$av29,$av30,$av31,
               $av32,$av33,$av34,$av35,$av36,$av37,$av38,$av39,$av40,$av41,$av42,$av43,$av44,$av45,$av46,$av47,$av48,
               $av49,$av50,$av51,$av52) {
        //prepara para a execução
        $sql = $this->db->prepare("INSERT INTO avaliacaofacial ("
                . "codCliente,av1,av2,av3,av4,av5,av6,av7,av8,av9,av10,av11,av12,av13,av14,av15,av16,av17,av18,av19,"
                . "av20,av21,av22,av23,av24,av25,av26,av27,av28,av29,av30,av31,av32,av33,av34,av35,av36,av37,av38,"
                . "av39,av40,av41,av42,av43,av44,av45,av46,av47,av48,av49,av50,av51,av52) "
                . " VALUES (:codCliente,:av1,:av2,:av3,:av4,:av5,:av6,:av7,:av8,:av9,:av10,:av11,:av12,:av13,:av14,"
                . ":av15,:av16,:av17,:av18,:av19,:av20,:av21,:av22,:av23,:av24,:av25,:av26,:av27,:av28,:av29,:av30,"
                . ":av31,:av32,:av33,:av34,:av35,:av36,:av37,:av38,:av39,:av40,:av41,:av42,:av43,:av44,:av45,:av46,"
                . ":av47,:av48,:av49,:av50,:av51,:av52)");
        //retorna a execução
        return $sql->execute([':codCliente' => $codCliente, ':av1' => $av1, ':av2' => $av2, ':av3' => $av3,
            ':av4' => $av4, ':av5' => $av5, ':av6' => $av6, ':av7' => $av7, ':av8' => $av8, ':av9' => $av9,
            ':av10' => $av10, ':av11' => $av11, ':av12' => $av12, ':av13' => $av13, ':av14' => $av14, ':av15' => $av15,
            ':av16' => $av16, ':av17' => $av17, ':av18' => $av18, ':av19' => $av19, ':av20' => $av20, ':av21' => $av21,
            ':av22' => $av22, ':av23' => $av23, ':av24' => $av24, ':av25' => $av25, ':av26' => $av26, ':av27' => $av27,
            ':av28' => $av28, ':av29' => $av29, ':av30' => $av30, ':av31' => $av31, ':av32' => $av32, ':av33' => $av33,
            ':av34' => $av34, ':av35' => $av35, ':av36' => $av36, ':av37' => $av37, ':av38' => $av38, ':av39' => $av39,
            ':av40' => $av40, ':av41' => $av41, ':av42' => $av42, ':av43' => $av43, ':av44' => $av44, ':av45' => $av45,
            ':av46' => $av46, ':av47' => $av47, ':av48' => $av48, ':av49' => $av49, ':av50' => $av50, ':av51' => $av51,
            ':av52' => $av52]);
    }
            
}
