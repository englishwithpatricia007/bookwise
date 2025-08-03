<?php

$pesquisar = $_REQUEST['pesquisar'] ?? '';

$livros = (new DB)->query(
    "SELECT * FROM livros where titulo like :filtro",
    Livro::class, 
    ["filtro"=> "%$pesquisar%"])->fetchAll();

// dd($livros);
//livros($pesquisar);

view('index', compact('livros'));