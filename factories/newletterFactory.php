<?php

require_once $_SERVER['DOCUMENT_ROOT']."/factories/abstractedFactory.php";

    class newletter extends abstractFactory{
        function getEmail(){
            try{
                $q = "SELECT * FROM newletter";
                $stmt = $this->pdo->prepare($q);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_CLASS);
            }catch (Exception $e) {
                    echo 'Exception reçue : ',  $e->getMessage(), "\n";
            }
        }
    }