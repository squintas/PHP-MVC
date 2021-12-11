<?php
class Categories 
{
    private $db;
    
    public function __construct(){
        $this->db = new PDO("mysql:host=localhost;dbname=traveljournal;charset=utf8mb4","root","");
    }

    public function getHotelCategory($permalink){
        
        $query = $this->db->prepare("

        SELECT category_id, name, permalink
        FROM categories; 
        WHERE permalink = ?
        ");

        $query ->execute([$permalink]);

        // 3- caso seja SELECT, é necessário obter os dados para dentro de uma variavel
        return $query->fetchAll( PDO::FETCH_ASSOC);
        
    }

    public function getHotelInfo(){

        $query = $this->db->prepare("

        SELECT 
            hotels.hotel_id, 
            hotels.name, 
            hotels.category, 
            hotels.country, 
            hotels.city,
            hotels.description,
            hotels.booking_link,
            hotels.tripadvisor_link
        FROM hotels; 
    
        ");

        $query ->execute();

        // 3- caso seja SELECT, é necessário obter os dados para dentro de uma variavel
        return $query->fetchAll( PDO::FETCH_ASSOC);

    }

    
}


?>


