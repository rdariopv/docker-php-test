<?php
class ChoferModel {
    private $conn;
    private $table_name = "chofer";

    public $id_chofer;
    public $name;
    public $ci;
    public $telefono;
    public $placa;
    public $foto;


    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAllUsers() {
        $query = "SELECT id, name, email FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function createUser($name, $email) {
        $query = "INSERT INTO " . $this->table_name . " SET name=:name, email=:email";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
