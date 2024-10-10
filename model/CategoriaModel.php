<?php
require_once 'Model.php';

class CategoriaModel extends Model {
    

    public function buscar(){
        $sql = 'SELECT * FROM categoria';
        $stmt = $this->db->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($categoria) {
        $sql = 'INSERT INTO categoria (categoria) VALUES (:categoria)';
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':categoria', $categoria);
        
        if ($stmt->execute()) {
            return ['code' => 200, 'status' => 'Created'];
        }
    }
}
?>
