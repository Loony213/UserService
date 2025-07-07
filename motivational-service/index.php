<?php
// Habilitar CORS para permitir solicitudes de cualquier origen
header("Access-Control-Allow-Origin: *");  // Permite cualquier origen (puedes especificar un origen si lo prefieres)
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");  // Métodos permitidos
header("Access-Control-Allow-Headers: Content-Type, Authorization");  // Cabeceras permitidas

// Resto de tu código...
require_once 'controllers/phraseController.php';

header('Content-Type: application/json');

// Asegurarse de que la URL es para obtener la frase
if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_SERVER['REQUEST_URI'] == '/get-phrase') {
    $controller = new PhraseController();
    $controller->getPhrase();
} else {
    http_response_code(404);
    echo json_encode(['error' => 'Endpoint no encontrado']);
}
