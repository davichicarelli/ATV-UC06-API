<?php

class Pizza
{
    public $conn;
    private $tabela = 'pizzas';
    public $idPizza;
    public $nome;
    public $ingredientes;
    public $valor;

    public function __construct($db)

    {
        $this->conn = $db;
        //$this->tabela = 'pizzas';
    }

    function read() {
        // Query SQL para selecionar todos os campos da tabela de pizzas
        $query = "SELECT idPizza, nome, ingredientes, valor FROM " . $this->tabela . " ORDER BY valor ASC";

        // Prepara a query
        $stmt = $this->conn->prepare($query);

        // Executa a query
        $stmt->execute();

        return $stmt; 
    }

    public function read_single()
    {
        // Cria a consulta
        $query = 'SELECT
            p.idPizza,
            p.nome,
            p.ingredientes,
            p.valor
        FROM
            ' . $this->tabela . ' p
        WHERE
            p.idPizza = ?
        LIMIT 1';
 
        // Prepara a query
        $stmt = $this->conn->prepare($query);
 
        // Vincula o ID
        $stmt->bindParam(1, $this->idPizza);
 
        // Executa a query
        $stmt->execute();
 
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
 
        // Define as propriedades
        $this->nome = $row['nome'] ?? null;
        $this->ingredientes = $row['ingredientes'] ?? null;
        $this->valor = $row['valor'] ?? null;
    }
}