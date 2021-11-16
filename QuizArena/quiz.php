<!-- connection with the server -->
<?php
// $_SESSION['log_status'] === 'Logedin'
session_start();
if (isset($_POST['Subject']) && $_SESSION['log_status'] === 'Logedin') {
?>
    <?php
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
        if (isset($_POST["Subject"])) {
            $sub = $_POST["Subject"];
        }
        $q_id = 0;

        $question_select_query = "select Question_id, Question from Questions where Subject =:sub order by RAND() limit 10";
        $question_stmt = $conn->prepare($question_select_query);
        $question_stmt->execute(['sub' => $sub]);


        $answer_select_query = "select * from Answers where Question_id =:q_id";
        $answer_stmt = $conn->prepare($answer_select_query);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    ?>

    <!-- checking form submission -->

    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="images\icon.png">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <style>
            body,
            html {
                height: 100%;
            }

            .bg {
                /* The image used */
                /* background-image: url("images\\background2.jpg"); */
                /* background-repeat: repeat-y; */
                /* Full height */
                height: 100%;
                background-color: #8590AA;
                /* Center and scale the image nicely */
                background-position: center;
                background-size: cover;
            }

            .new-roman {
                font-family: 'Times New Roman', Times, serif;
                font-weight: bold;
            }
        </style>

        <title>Quiz</title>
    </head>

    <body class="bg new-roman ">
        <nav class="navbar navbar-expand-lg navbar-light " style="background-color:#C4DBF6">
            <a class="navbar-brand" href="home.php">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto pr-3">
                    <li class="nav-item active nav navbar-right">
                        <a class="nav-link" href="#"><?php echo $_SESSION['username'] ?> <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active nav navbar-right">
                        <a class="nav-link" href="logout.php">Logout <span class="sr-only">(current)</span></a>
                    </li>


                </ul>
            </div>
        </nav>


        <div class="container my-3">

            <div class="jumbotron jumbotron-fluid bg-dark text-white">
                <div class="container">
                    <h1 class="display-4 text-danger"> <?php echo $sub ?></h1>
                    <br>
                    <p class="lead"> <em>Best of luck for your attempt.</em></p>
                    <p class="lead"> <em>There are 10 questions.</em></p>
                    <p class="lead"> <em> After attempting all questions please submit to get your score.</em></p>
                </div>
            </div>


            <!-- Result  -->
            <div id="result" style="display: none" class="new-roman h4">
                <center>
                    <table class="table table-borderless table-info text-center w-75 text-dark">
                        <thead>
                            <tr>
                                <th scope="col" class="bg-primary">Score</th>
                                <th scope="col" class="bg-success">Correct</th>
                                <th scope="col" class="bg-danger">Incorrect</th>
                                <th scope="col" class="bg-info">Attempted</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" id="result_score"></th>
                                <td id="result_correct"></td>
                                <td id="result_incorrect"></td>
                                <td id="result_attempted"></td>
                            </tr>

                        </tbody>
                    </table>
                </center>
            </div>

            <!-- The questions -->

            <form id="postform">
                <?php
                $choices = array("A", "B", "C", "D");
                ?>

                <?php
                $i = 1;
                while ($q_row = $question_stmt->fetch()) {
                ?>

                    <div class="card w-100 text-dark  mb-3 my-5">

                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo "Q" . $i . ") " .
                                    $q_row->Question; ?></h5><br>

                            <!-- The options -->
                            <div class="radio">
                                <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                                    <?php
                                    $q_id = $q_row->Question_id;
                                    $answer_stmt->execute(['q_id' => $q_id]);
                                    $j = 0;
                                    while ($ans_row = $answer_stmt->fetch()) {
                                    ?>

                                        <label class="btn btn-outline-primary text-left mb-3">
                                            <input type="radio" name="<?php echo $q_id ?>" id="<?php echo $ans_row->Ans_id ?>" value="<?php echo $ans_row->Ans_id ?>" autocomplete="off"><?php echo $choices[$j] . ") " . $ans_row->Answer ?>
                                        </label>

                                    <?php $j++;
                                    } ?>

                                </div>

                            </div>

                            <h4 style="display : none;" id=<?php echo "correct_ans_id_" . $q_row->Question_id ?>>Correct Answer: <span id=<?php echo "span_id_" . $q_row->Question_id ?> class="badge badge-success"></span></h4>

                        </div>

                    </div>

                <?php $i++;
                } ?>

                <center><button type="submit" name="submit" value="submit" class="btn btn-success btn-lg" id="submit">Submit</button></center>
                <br>
            </form>


        </div> <!-- container -->



        </div>

















        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

        <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

        <script src="js\code.min.js"></script>
    </body>

    </html>

<?php
} else {
    echo "<h1>Not Allowed</h1>";
}


?>