<?php

class Autor{
    public $id;
    public $nome;
    public $email;
    public $website;

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setWebsite($website){
        $this->website = $website;
    }

    public function getWebsite(){
        return $this->website;
    }
}

?>