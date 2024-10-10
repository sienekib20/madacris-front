<?php
require_once 'Model.php';

class UserModel extends Model {
    public function login($email, $password) {
        $sql = 'SELECT user_log.*, (SELECT concat(nome," ", apelido) FROM usuarios WHERE usuarios.user_log_id = user_log.user_log_id ) nome FROM user_log WHERE username = :username AND password = :password';
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':username', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            session_start();
            $_SESSION["id"] = $user["user_log_id"];
            $_SESSION["name"] = $user["nome"];
        }

        return $user;
    }

    public function buscar(){
        $sql = 'SELECT * FROM usuarios';
        $stmt = $this->db->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
