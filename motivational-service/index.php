<?php
// Punto de entrada para las solicitudes HTTP

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
