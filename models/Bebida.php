<?php

class Bebida
{
    public $conn;
    private $tabela = 'bebidas';
    public $idBebida;
    public $nome;
    public $tipo;
    public $valor;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    function read() {
        $query = "SELECT idBebida, nome, tipo, valor FROM " . $this->tabela . " ORDER BY valor ASC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt; 
    }

    public function read_single()
    {
        $query = 'SELECT
            b.idBebida,
            b.nome,
            b.tipo,
            b.valor
        FROM
            ' . $this->tabela . ' b
        WHERE
            b.idBebida = ?
        LIMIT 1';
 
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->idBebida);
        $stmt->execute();
 
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
 
        $this->nome = $row['nome'] ?? null;
        $this->tipo = $row['tipo'] ?? null;
        $this->valor = $row['valor'] ?? null;
    }
}