<?php

class crud{

private $dataSource = "mysql:dbname=login;host=localhost;";


    private $userName = "root";
    private $password = "";


    public function insertData($name, $password)
    {
        $p = new PDO($this->dataSource, $this->userName, $this->password);
    
      
        $stmnt = $p->prepare('SELECT * FROM gebruikers WHERE username = :n');
        $stmnt->bindValue(':n', $name);
        $stmnt->execute();
        $row = $stmnt->fetch(PDO::FETCH_ASSOC);
        
    
        if (!$row) {
          
            $stmnt = $p->prepare('INSERT INTO gebruikers(username, password) VALUES(:n, :p)');
            $stmnt->bindValue(':n', $name);
            $stmnt->bindValue(':p', $password);
            $stmnt->execute();
            //echo '<script>alert("Registratie successvol")</script>'; 
            header("Location:Welcome.php");
        } else {
           
            echo '<script>alert("Gebruikersnaam bestaat al")</script>'; 
        }
    }

}

?>