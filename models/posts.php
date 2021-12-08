<?php
class Posts 
{
    private $db;
    
    public function __contruct(){
        $this->db = new PDO("mysql:host=localhost;dbname=traveljournal;charset=utf8mb4","root","");
    }

    public function get(){
        
        $query = $this->db->prepare("

        SELECT id, title, content
        FROM posts 
    
        ");

        $query ->execute();

        // 3- caso seja SELECT, é necessário obter os dados para dentro de uma variavel
        return $posts = $query->fetchAll( PDO::FETCH_ASSOC);
        
    }
}


?>


