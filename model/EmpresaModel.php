<?php
require_once 'Model.php';

class EmpresaModel extends Model {
    public function getEmpresas() {
        $sql = 'SELECT * FROM clientes';
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function atualizarLicenca($id) {
        $sql = 'UPDATE empresas SET data_licenca = NOW() WHERE id = :id';
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}
?>
