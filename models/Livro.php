<?php

class Livro {
    public $id;
    public $titulo;
    public $autor;
    public $descricao;
    public $usuario_id;

    public function __construct($id, $titulo, $autor, $descricao, $usuario_id) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->descricao = $descricao;
        $this->usuario_id = $usuario_id;
    }

    public static function make($data) {
        $obj = new Livro($data['id'],
            $data['titulo'],
            $data['autor'],
            $data['descricao'],
            usuario_id: $data['usuario_id']);
        return $obj;
    }
    
}