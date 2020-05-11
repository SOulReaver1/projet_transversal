<?php

require_once $_SERVER['DOCUMENT_ROOT']."/factories/abstractedFactory.php";

    class adminLogin extends abstractFactory{
        
        function adminConnect($email, $password){
            try{
                $q = "SELECT users.*, profilpictures.url FROM users 
                INNER JOIN profilpictures ON profilpictures.id = users.id_profilPic
                WHERE email = :email AND password = :password";
                $stmt = $this->pdo->prepare($q);
                $stmt->execute(["email" => $email, "password" => $password]);
                $result = $stmt->fetchAll(PDO::FETCH_CLASS);
                if(!empty($result)){
                    $_SESSION["login"] = $result;
                    header("Location: /admin");
                }else{
                    return "<span class='text-danger'>Identifiant incorrect !</span>
                    ";
                }
            }catch (Exception $e) {
                echo 'Exception reçue : ',  $e->getMessage(), "\n";
            }
        }
        
        // function nbrAdmin(){
        //     $q = "SELECT count(*) AS result FROM users_has_groups
        //     WHERE idgroups = :group";
        //     $stmt = $this->pdo->prepare($q);
        //     $stmt->execute([":group" => 3]);
        //     return $stmt->fetchAll(PDO::FETCH_CLASS); 
        // }
    }