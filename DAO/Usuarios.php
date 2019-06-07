<?php
// se classe DAO.php foi iniciada nao sera chamada novamente
require_once 'DAO.php';

class Usuarios extends DAO {
    
    public function localizarPorLogin($login){
        // "prepare" prepara para a execução
        $sql = $this->db->prepare("SELECT * FROM usuarios WHERE login=:login");
        // executa 
        $sql->execute([':login'=>$login]); 
        //retorna uma linha
        return $sql->fetch();
    }
    
    public function inserir($login, $senha){
        //prepara para a execução
        $sql = $this->db->prepare("INSERT INTO usuarios(login,senha) VALUES (:login, :senha)");
        //retorna a execução
        return $sql->execute([':login' =>$login, //algoritimo com criptografia -- algoritmo padrão + atualizado 
                              ':senha' => password_hash($senha, PASSWORD_DEFAULT)
        ]);
    }
    
}
