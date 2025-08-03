<?php

class Livro {
    public $id;
    public $titulo;
    public $autor;
    public $descricao;

    public function __construct($id, $titulo, $autor, $descricao) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->descricao = $descricao;
    }

    public static function make($data) {
        $obj = new Livro($data['id'],
            $data['titulo'],
            $data['autor'],
            $data['descricao']);
        return $obj;
    }
    
}