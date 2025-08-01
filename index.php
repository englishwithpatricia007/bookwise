<?php
// index.php
$livros =[
    ['id' => 1, 'titulo' => 'Senhor dos Aneis', 'autor' => 'J. R. R. Tolkien', 'descricao' => 'é uma obra épica de fantasia escrita por J.R.R. Tolkien, ambientada na Terra-média, um mundo fictício cheio de diversas raças como Hobbits, Elfos, Anões, Humanos e criaturas malignas como Orcs. A história gira em torno da jornada de Frodo Bolseiro para destruir o Um Anel, forjado pelo Senhor Sombrio, Sauron, na Montanha da Perdição, o único lugar onde ele pode ser desfeito.', 'avaliacoes' => 3],
    ['id' => 2, 'titulo' => 'The Twelve Tribes of Hattie', 'autor' => 'Ayana Mathis', 'descricao' => 'The Twelve Tribes of Hattie, by Ayana Mathis, tells the story of Hattie Shepherd and her descendants, focusing on her children and a granddaughter, who are collectively seen as her "twelve tribes".', 'avaliacoes' => 5],
    ['id' => 3, 'titulo' => 'Como dizer tudo em inglês', 'autor' => 'Ron Martinez', 'descricao' => 'Lorem ipsum', 'avaliacoes' => 4],
];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-stone-950 text-stone-200">
    <!-- <h1 class="text-3xl font-bold underline"> Hello world! </h1> -->
     <header class="bg-stone-900 shadow-lg">
        <nav class="mx-auto max-w-screen-lg flex justify-between py-4">
            <div class="font-bold text-xl tracking-wide">Book Wise</div>
            <ul class="flex space-x-4 font-bold">
                <li><a href="/" class="text-lime-500">Explorar</a></li>
                <li><a href="/meus-livros.php" class="hover:underline">Meus Livros</a></li>
            </ul>
            <ul>
                <li><a href="/login.php" class="hover:underline">Fazer Login</a></li>
            </ul>
        </nav>
     </header>

    <main class="mx-auto max-w-screen-lg space-y-4 p-4">
        <h1 class="font-bold text-lg">Explorar</h1>
        
        <form class="w-full flex justify-between items-center my-4 space-x-2">
            <input type="text" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 w-full" placeholder="Pesquisar..." name=""/> 
            <button type="submit" class="bg-lime-500 text-stone-900 rounded-md text-sm px-2 py-1">Pesquisar</button>
        </form>

        <section class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">

            <?php foreach ($livros as $livro): ?>


             <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
                <div class="flex">
                    <div class="w-1/3">imagem</div>
                    <div class="space-y-1">
                        <a href="/livro.php?id=<?=$livro['id']?>" class="font-semibold hover:underline"><?=$livro['titulo']?></a>
                        <div class="text-xs italic"><?=$livro['autor']?></div>
                        <div class="text-xs italic">⭐⭐⭐⭐⭐ (3 avaliações)</div>
                    </div>
                </div>
                <div class="text-sm mt-2">
                    <?=$livro['descricao']?>
                </div>
             </div>
           
          
            <?php endforeach?>

          
        </section>
    </main>


</body>

</html>