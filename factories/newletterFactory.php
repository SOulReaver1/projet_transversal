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
        function countMails(){
            $q = "SELECT COUNT(*) AS num FROM newletter";
            $stmt = $this->pdo->prepare($q);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_CLASS);
        }
        function countMonthMails(){
            $q = "SELECT COUNT(*) AS num FROM newletter WHERE MONTH(created_at)=".date('n');
            $stmt = $this->pdo->prepare($q);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_CLASS);
        }
        function insertNewMail($email){
            $q = "INSERT INTO newletter (email)
            VALUES (:email)";
            $stmt = $this->pdo->prepare($q);
            $stmt->execute([":email" => $email]);
            return "Merci, votre mail est bien enregistrer";
        }
        function statMail(){
            $q = "SELECT COUNT(*) * 100 / (SELECT COUNT(*) FROM recordquestions) AS statsMail
            FROM newletter";
            $stmt = $this->pdo->prepare($q);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_CLASS);
        }

    }