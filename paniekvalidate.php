<?php

    $question1 = test_input($_POST["question1"]);
    $question2 = test_input($_POST["question2"]);
    $question3 = test_input($_POST["question3"]);
    $question4 = test_input($_POST["question4"]);
    $question5 = test_input($_POST["question5"]);
    $question6 = test_input($_POST["question6"]);
    $question7 = test_input($_POST["question7"]);
    $question8 = test_input($_POST["question8"]);
    

    if (empty($question1) || empty($question2) || empty($question3) || empty($question4) || empty($question5) || empty($question6) || empty($question7) || empty($question8)) {
        $error = "Graag alles invullen.";
    } else {
        if (!preg_match("/^[a-zA-Z]*$/", $question1) || !preg_match("/^[a-zA-Z]*$/", $question2) || !preg_match("/^[a-zA-Z]*$/", $question3) || !preg_match("/^[a-zA-Z]*$/", $question4) || !preg_match("/^[a-zA-Z]*$/", $question5) || !preg_match("/^[a-zA-Z]*$/", $question6) || !preg_match("/^[a-zA-Z]*$/", $question7) || !preg_match("/^[a-zA-Z]*$/", $question8)) {
            $error = "Gebruik alleen letters.";
        }
    }

    function test_input($data) {
        $data = htmlspecialchars($data);
        return $data;
    }

    
    if (empty($error)) {
        include("paniekresult.php");
    } else {
        include("paniek.php");
    }

