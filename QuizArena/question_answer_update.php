

<?php

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

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

    //echo "Connected successfully <br><br>";


    $question_select_query = "select max(Question_id) as max_ques_id from Questions";
    $question_stmt = $conn->prepare($question_select_query);
    $question_stmt->execute();
    $max_ques_id = ($question_stmt->fetch())->max_ques_id;

    $answer_select_query = "select max(Ans_id) as max_ans_id from answers";
    $answer_stmt = $conn->prepare($answer_select_query);
    $answer_stmt->execute();
    $max_ans_id = ($answer_stmt->fetch())->max_ans_id;



    if (isset($_POST['q&a_submit']) && $_POST['correct_ans'] != 'select' && $_POST['Subject'] != 'select') {
        $question_insert_query = "insert into questions (Question, subject, Ans_id)  values (:question, :subject, :ans_id)";
        $question_insert_stmt = $conn->prepare($question_insert_query);
        $correct_ans_id = 0;

        if ($_POST['correct_ans'] === 'A') {
            $correct_ans_id = $max_ans_id + 1;
        } elseif ($_POST['correct_ans'] === 'B') {
            $correct_ans_id = $max_ans_id + 2;
        } elseif ($_POST['correct_ans'] === 'C') {
            $correct_ans_id = $max_ans_id + 3;
        } else {
            $correct_ans_id = $max_ans_id + 4;
        }

        $question_insert_stmt->execute(['question' => $_POST['Question'], 'subject' => $_POST['Subject'], 'ans_id' => $correct_ans_id]);



        $answer_insert_query = "insert into answers (Answer, Question_id) values (:Answer, :Question_id)";
        $answer_insert_stmt = $conn->prepare($answer_insert_query);
        $answer_insert_stmt->execute(['Answer' => $_POST['option1'], 'Question_id' => $max_ques_id + 1]);
        $answer_insert_stmt->execute(['Answer' => $_POST['option2'], 'Question_id' => $max_ques_id + 1]);
        $answer_insert_stmt->execute(['Answer' => $_POST['option3'], 'Question_id' => $max_ques_id + 1]);
        $answer_insert_stmt->execute(['Answer' => $_POST['option4'], 'Question_id' => $max_ques_id + 1]);

        header("Location: question_answer.php");
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>


