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
                $q = "SELECT resultatecolo.name AS nameResult, resultatecolo.status AS resultStatus, resultatecolo.description AS resultDesc, resultatecoloprofil.name AS profilName, resultatecoloprofil.description AS profilDesc
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
    }