<?php

class library extends Connect
{
    public $bd;
    public $books;

    public function __construct(){

        $this->bd = Connect::connection();

        $this->books = array();
        
    }
    
    public function get_Books(){   

    $sql = $this->bd->query("select*from proyecto");

    while($rows = $sql->fetch_assocc())
    {
        $this->books[] = $rows;

    }
        return $this->books;
    }
}


    public function insert(){

        $pdoQuery = $this->bd->query("INSERT INTO `users`(`id`, `name`, `type`) VALUES (:fname,:lname,:age)");



    }
    


?>



