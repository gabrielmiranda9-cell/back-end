<?php

class usuario {
    protected $nome;
    protected $email;

    public function_construct($nome,$email) {
        $this->nome = $nome; 
        $this->email = $email;

    }

    public function getnome() {
        return $this->nome;
    }
    public function getemail() {
        return
    }

public function exibirInfo() {
return "Nome: {$this->nome} | Email: {$this->email}";
}