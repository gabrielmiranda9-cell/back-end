<?php
require_once "Usuario.php";

// Classe Filha - Aluno
class Aluno extends Usuario {
private $matricula;

public function_construct($nome, $email, $matricula) {
parent: :_ construct($nome, $email);
$this->matricula = $matricula;
}
public function getMatricula() {
return $this->matricula;
}
public function exibirInfo() {
return parent : : exibirInfo() . "| matricula: {$this->matricula}";
}
public function estudar() {
    return "{$this->nome} esta estudando...";
}

}