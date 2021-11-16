<?php

$request_payload = file_get_contents("php://input");

$obj = json_decode($request_payload, true);


if (isset($obj['submitted'])) {
    //Connecting to the server
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "quizarena";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // set the PDO default fetch mode to object
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

        $q_id = 0;

        $question_select_query = "select Ans_id from Questions where Question_id =:q_id";
        $question_stmt = $conn->prepare($question_select_query);


        //Calculating score 

        $score = 0;
        $attempted = 0;
        $correct = 0;

        $answers_to_send = array();

        foreach ($obj as $key => $value) {

            if ($key == 'submitted') {
                continue;
            }

            if ($value != 'none') {
                $attempted++;
            }

            $question_stmt->execute(['q_id' => $key]);

            $correct_ans = $question_stmt->fetch();

            $answers_to_send[$key] = $correct_ans->Ans_id;

            if (!strcmp($correct_ans->Ans_id, $value)) {
                $correct++;
                $score++;
            }
        }
        $incorrect = $attempted - $correct;
        $response = array("Score" => $score, "Correct" => $correct, "Incorrect" => $incorrect, "Attempted" => $attempted, "answer_key" => $answers_to_send);

        $send_data = json_encode($response);

        echo $send_data;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
} else {
    echo "Sorry not allowed";
}
