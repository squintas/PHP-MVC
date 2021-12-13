<?php
class Hotels 
{
    private $db;
    
    public function __construct(){
        $this->db = new PDO("mysql:host=localhost;dbname=traveljournal;charset=utf8mb4","root","");
    }

    

    public function getHotelInfo($category_id){
       
        $query = $this->db->prepare("

        SELECT 
            hotels.category_id, 
            hotels.name AS hotelname, 
            hotels.country, 
            hotels.permalink,
            hotels.city, 
            categories.name AS categoryname
        FROM 
            hotels 
        INNER JOIN 
            categories 
        ON 
            hotels.category_id = categories.category_id
        WHERE 
            hotels.category_id = ?
        
        ");

        $query ->execute([$category_id]);

        // 3- caso seja SELECT, é necessário obter os dados para dentro de uma variavel
        return $query->fetchAll( PDO::FETCH_ASSOC);

    }


    public function getHotelByPermalink($permalink){
       
        $query = $this->db->prepare("

        SELECT 
            hotels.category_id, 
            hotels.name, 
            hotels.description,
            hotels.country, 
            hotels.permalink,
            hotels.city 
        FROM 
            hotels 
        WHERE
            hotels.permalink = ?
        
        ");

        $query ->execute([$permalink]);

        // 3- caso seja SELECT, é necessário obter os dados para dentro de uma variavel
        return $query->fetch( PDO::FETCH_ASSOC);

    }   
}


?>


