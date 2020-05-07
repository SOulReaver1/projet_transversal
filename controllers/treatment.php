<?php

class database{
    private $dbh;
    private $dsn = 'mysql:dbname=transversal_project;host=127.0.0.1';
    private $user = "root";
    private $password = "0000";
    public function connect(){
        try{
            $this->dbh = new PDO($this->dsn, $this->user, $this->password);
        }catch (PDOException $e) {
            header('Location:index.html?success=false');
            exit;
        }
    }

    public function insert_SQL($q, $exe){
        try{
            $stmt = $this->dbh->prepare($q);
            $stmt->execute($exe);
            header('Location:index.html?success=true');
            exit;
        }catch (PDOException $e){
            header('Location:index.html?success=false');
            exit;
        }
    }
}

$pdo = new database();
$pdo->connect();
$pdo->insert_SQL('INSERT INTO emprunte_carbone (type, surface, chauffage, email) VALUES (:typee, :surface, :chauffage, :email)', ["typee" => $_POST["type"], "surface" => $_POST["surface"], "chauffage" => $_POST["chauffage"], "email" => $_POST["email"]]);
