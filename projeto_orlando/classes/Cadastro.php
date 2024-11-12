<?php
namespace classes;

class Cadastro {
    private $conn;
    private $table_name = "vagas";

    public $empresa;
    public $whatsapp;
    public $email;
    public $descricao;
    public $curso;

    private $db_host = 'localhost';
    private $db_name = 'vagas';
    private $db_user = 'root';
    private $db_pass = '';

    public function __construct() {
        try {
            
            $this->conn = new \PDO("mysql:host=$this->db_host;dbname=$this->db_name;charset=utf8", $this->db_user, $this->db_pass);
            $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            echo "Erro de conexão: " . $e->getMessage();
        }
    }

    public function __destruct() {
        
        $this->conn = null;
    }

    public function inserir() {
        $query = "INSERT INTO " . $this->table_name . " (nome_empresa, numero_whatsapp, email_contato, descritivo_vaga, curso) 
                  VALUES (:empresa, :whatsapp, :email, :descricao, :curso)";
        $stmt = $this->conn->prepare($query);

        
        $stmt->bindParam(':empresa', $this->empresa);
        $stmt->bindParam(':whatsapp', $this->whatsapp);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':descricao', $this->descricao);
        $stmt->bindParam(':curso', $this->curso);

        return $stmt->execute();
    }

    public function remover($id) {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $id);

        return $stmt->execute();
    }


    public function listar() {
        $query = "SELECT id, nome_empresa, numero_whatsapp, email_contato, descritivo_vaga, curso FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
?>
