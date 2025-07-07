<?php
// Servicio que maneja la generación de frases motivacionales aleatorias

class PhraseService {
    private $phrases;

    public function __construct() {
        $this->phrases = include('data/phrases.php'); // Cargar frases desde el archivo
    }

    public function getRandomPhrase() {
        // Seleccionar una frase aleatoria
        return $this->phrases[array_rand($this->phrases)];
    }
}
