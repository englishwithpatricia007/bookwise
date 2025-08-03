<?php

$id = $_REQUEST['id'];
$db = new DB();
$livro = $db->livro($id); // Assuming livro returns an array with one Livro object



// view('livro', compact('livro'));
view('livro', compact('livro'));