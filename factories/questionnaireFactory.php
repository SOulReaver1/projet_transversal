<?php


require_once $_SERVER['DOCUMENT_ROOT']."/factories/abstractedFactory.php";

    class questions extends abstractFactory{

        function allQuestions(){
            try{
                $q = "SELECT * FROM questions";
                $stmt = $this->pdo->prepare($q);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_CLASS);
            }catch (Exception $e) {
                    echo 'Exception reçue : ',  $e->getMessage(), "\n";
            }
        }

        function allAnswersOfQuestions($id){
            try{
                $q = "SELECT answerquestions.id, answerquestions.name, answerquestions.points
                FROM questions
                INNER JOIN answerquestions ON answerquestions.id_question = questions.id
                WHERE questions.id = :id";
                $stmt = $this->pdo->prepare($q);
                $stmt->execute([":id" => $id]);
                return $stmt->fetchAll(PDO::FETCH_CLASS);
            }catch (Exception $e) {
                    echo 'Exception reçue : ',  $e->getMessage(), "\n";
            }
        }

        function allAnswers($id){
            try{
                $q = "SELECT name, points
                FROM answerquestions
                WHERE id = :id";
                $stmt = $this->pdo->prepare($q);
                $stmt->execute([":id" => $id]);
                return $stmt->fetchAll(PDO::FETCH_CLASS);
            }catch (Exception $e) {
                    echo 'Exception reçue : ',  $e->getMessage(), "\n";
            }
        }

        function getProfil($profil){
            try{
                $q = "SELECT resultatecolo.name AS nameResult, resultatecolo.status AS resultStatus, resultatecolo.description AS resultDesc, resultatecoloprofil.name AS profilName, resultatecoloprofil.id AS idProfil, resultatecoloprofil.description AS profilDesc, resultatecolo.img AS resultImg, resultatecoloprofil.img AS profilImg
                FROM resultatecolo
                INNER JOIN resultatecoloprofil ON resultatecoloprofil.id_result = resultatecolo.id
                WHERE resultatecolo.id = :profil";
                $stmt = $this->pdo->prepare($q);
                $stmt->execute([":profil" => $profil]);
                return $stmt->fetchAll(PDO::FETCH_CLASS);
            }catch (Exception $e) {
                    echo 'Exception reçue : ',  $e->getMessage(), "\n";
            }
        }

        function getConseils($profil){
            try{
                $q = "SELECT *
                FROM resultatecoloconseils
                WHERE id_result = :profil";
                $stmt = $this->pdo->prepare($q);
                $stmt->execute([":profil" => $profil]);
                return $stmt->fetchAll(PDO::FETCH_CLASS);
            }catch (Exception $e) {
                    echo 'Exception reçue : ',  $e->getMessage(), "\n";
            }
        }
        function deleteQuestion($id){
            try{
                $q = "DELETE questions, answerquestions
                FROM questions
                INNER JOIN answerquestions ON answerquestions.id_question = questions.id
                WHERE questions.id = :id";
                $stmt = $this->pdo->prepare($q);
                $stmt->execute([":id" => $id]);
            }catch (Exception $e) {
                    echo 'Exception reçue : ',  $e->getMessage(), "\n";
            }
        }

        function addQuestion($question){
            try{
                $q = 'INSERT INTO questions (name)
                VALUES (:question);';
                $stmt = $this->pdo->prepare($q);
                $stmt->execute([":question" => $question["question-name"]]);
                foreach ($question["reponses"] as $key => $value) {
                    $q2 = 'INSERT INTO answerquestions (id_question, name, points)
                    VALUES ((SELECT id FROM questions ORDER BY id DESC LIMIT 1), :name, :pts)';
                    $stmt2 = $this->pdo->prepare($q2);
                    $stmt2->execute([":name" => $value, ":pts" => intval($question["points"][$key])]);
                }
            }catch (Exception $e) {
                    echo 'Exception reçue : ',  $e->getMessage(), "\n";
            }
        }
        function recordQuestion($idProfil){
            $q = "INSERT INTO recordquestions (profil_id)
            VALUES (:idProfil)";
            $stmt = $this->pdo->prepare($q);
            $stmt->execute([":idProfil" => $idProfil]);
        }
        function recordsCount(){
            $q = "SELECT COUNT(*) AS num FROM recordquestions";
            $stmt = $this->pdo->prepare($q);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_CLASS);
        }

        function calcTypeOfProfil(){
            $q = "SELECT resultatecoloprofil.name, COUNT(*) * 100.0 / (SELECT COUNT(*) FROM recordquestions) AS stats, resultatecoloprofil.img AS img, (SELECT COUNT(*) FROM newletter) / COUNT(*) * 100 AS statsMail
            FROM recordquestions
            INNER JOIN resultatecoloprofil ON resultatecoloprofil.id = recordquestions.profil_id
            GROUP BY profil_id";
            $stmt = $this->pdo->prepare($q);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_CLASS);
        }
        function editQuestion($question){
            try{
                $q = "UPDATE questions SET name = :questionName WHERE id = :idQuestion; DELETE 
                FROM answerquestions
                WHERE id_question = :idQuestion;";
                $stmt = $this->pdo->prepare($q);
                $stmt->execute([":questionName" => $question["editQuestion"], ":idQuestion" => $question["questionId"]]);
                $stmt->closeCursor();
                foreach ($question["editAnswerToQuestion"] as $key => $value) {
                    $q2 = "INSERT INTO answerquestions (id_question, name, points)
                    VALUES (:idQuestion, :answerName, :points)";
                    $stmt2 = $this->pdo->prepare($q2);
                    $stmt2->execute([":idQuestion" => $question["questionId"], ":answerName" => $value, ":points" => $question["editPointsToQuestion"][$key]]);
                }
            }catch (Exception $e) {
                echo 'Exception reçue : ',  $e->getMessage(), "\n";
            }
        }
        function shareResultOnNetwork($ip){
            $q = "INSERT INTO shareresult (ip) VALUES (:ip)";
            $stmt = $this->pdo->prepare($q);
            $stmt->execute([":ip" => $ip]);
        }
        function countShare(){
            $q = "SELECT COUNT(*) FROM shareResult";
            $stmt = $this->pdo->query($q);
            return $stmt->fetchColumn();
        }
    }