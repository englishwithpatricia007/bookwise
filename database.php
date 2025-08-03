<?php
class DB
{
    private $db;

    public function __construct(){
        $this->db = new PDO('sqlite:database.sqlite');
    }

    public function livros($pesquisa = '')
    {
        $prepare = $this->db->prepare(
             "SELECT * FROM livros where 
             usuario_id = 1 and titulo like :pesquisa"
         );

        $prepare->bindValue(':pesquisa', "$pesquisa%");
        $prepare->execute();
        $items = $prepare->fetchAll();

        return array_map(fn($item) => Livro::make($item), $items);
    }

    public function livro($id)
    {
        $sql = "SELECT * FROM livros";
        $sql .= " where id =" . $id;
        $query = $this->db->query($sql);
        $item = $query->fetch();
        return Livro::make($item);
    }
}
