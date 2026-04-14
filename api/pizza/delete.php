<?php
// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');
 
include_once '../../config/Database.php';
include_once '../../models/Pizza.php';
 
// Conexão
$database = new Database();
$db = $database->getConnection();
 
// Instanciar Pizza
$pizza = new Pizza($db);
 
if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    try {
        // Pegar JSON
        $data = json_decode(file_get_contents("php://input"));
 
        if (!empty($data->id)) {
 
            $pizza->idPizza = $data->id;
 
            if ($pizza->delete()) {
                http_response_code(200);
                echo json_encode(array(
                    'Mensagem' => 'Pizza Deletada com Sucesso'
                ));
            } else {
                http_response_code(500);
                echo json_encode(array(
                    'Mensagem' => 'Nao foi possivel deletar a Pizza'
                ));
            }
 
        } else {
            http_response_code(400);
            echo json_encode(array(
                'Mensagem' => 'ID nao fornecido'
            ));
        }
 
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(array("erro" => $e->getMessage()));
    }
 
} else {
    http_response_code(405);
    echo json_encode(array("erro" => "Método não suportado!"));
}