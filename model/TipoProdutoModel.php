<?php
require_once 'Model.php';

class TipoProdutoModel extends Model {
    

    public function buscar(){
        $sql = 'SELECT * FROM tipo_produto';
        $stmt = $this->db->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($tipo) {
        $sql = 'INSERT INTO tipo_produto (tipo) VALUES (:tipo)';
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':tipo', $tipo);
        
        if ($stmt->execute()) {
            return ['code' => 200, 'status' => 'Created'];
        }
    }
}
?>
