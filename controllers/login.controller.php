<?php

// dump($_GET);
// dump($_POST);

$mensagem = $_REQUEST["mensagem"] ?? '';
view('login', compact('mensagem'));

//['mensagem' => $mensagem]);