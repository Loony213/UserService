<?php
// Controlador que gestiona la solicitud de obtener una frase motivacional

require_once 'services/phraseService.php';

class PhraseController {

    public function getPhrase() {
        $phraseService = new PhraseService();
        $phrase = $phraseService->getRandomPhrase();

        // Retornar la respuesta en formato JSON
        echo json_encode(['phrase' => $phrase]);
    }
}
