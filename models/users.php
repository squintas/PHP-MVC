<?php
class Users 
{
    private $db;
    
    public function __construct(){
        $this->db = new PDO("mysql:host=localhost;dbname=traveljournal;charset=utf8mb4","root","");
    }

   
    public function getUserLogin( $user ){
        
        $query = $this->db->prepare("

        ");

        $query ->execute();

        // 3- caso seja SELECT, é necessário obter os dados para dentro de uma variavel
        return $query->fetchAll( PDO::FETCH_ASSOC);
        
    }

    public function create( $user ){
        
        if(
            mb_strlen($user["name"]) >= 3 &&
            mb_strlen($user["name"]) <= 60 &&               
            mb_strlen($user["password"]) >= 8 &&
            mb_strlen($user["password"]) <= 1000 &&
            filter_var($user["email"], FILTER_VALIDATE_EMAIL) &&
            $user["password"] === $user["repeat_password"] &&            
            isset( $user["agrees"] )
        ) {

            try {

                $query = $this->db->prepare("
                    INSERT INTO users
                    (name, email, password)
                    VALUES(?, ?, ?)
                ");
    
                return $query->execute([
                    $user["name"],
                    $user["email"],
                    password_hash($user["password"], PASSWORD_DEFAULT)
                ]);

            } catch(Exception) {
                echo "Informação não preenchida correctamente";
            }             
        }         
    }

    

    
}


?>


