<?php
require_once 'Model.php';

class ProductModel extends Model {
    public function getProducts() {
        $sql = 'SELECT * FROM produtos';
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function atualizarLicenca($id) {
        $sql = 'UPDATE empresas SET data_licenca = NOW() WHERE id = :id';
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function insertProduct($nome_produto, $descricao, $categoria_id, $tipo_produto_id, $preco){

        $codigo = 'Ref_'.$this->lastInserted() ;

        $sql = "INSERT INTO produtos (nome_produto, descricao, categoria_id, tipo_produto_id, codigo, preco) VALUES (:nome_produto, :descricao, :categoria_id, :tipo_produto_id, :codigo, :preco)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':nome_produto', $nome_produto);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':categoria_id', $categoria_id);
        $stmt->bindParam(':tipo_produto_id', $tipo_produto_id);
        $stmt->bindParam(':codigo', $codigo);
        $stmt->bindParam(':preco', $preco);

        if (!$stmt->execute()) {
            $query = null;
            exit();
        }
        
        return ['code' => 201, 'status' => 'Created'];
    }


    public function lastInserted()
    {
        $sql = "SELECT `Auto_increment` FROM INFORMATION_SCHEMA.TABLES WHERE table_name = 'produtos' AND table_schema = 'bd_piloto'";
        $stmt = $this->db->query($sql);
        $auto_increments = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return intval($auto_increments['Auto_increment']) + 1;
    }
}
?>
