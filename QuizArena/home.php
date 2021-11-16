<!-- connection with the server -->

<?php
session_start();
if ($_SESSION['log_status'] === 'Logedin') {
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

        // echo "Connected successfully <br><br>";

        $subject_select_query = "select * from Subjects order by Subject";
        $subject_stmt = $conn->prepare($subject_select_query);
        $subject_stmt->execute();
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    ?>



    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <title>QuizArena</title>

        <style>
            body,
            html {
                height: 100%;
            }

            .bg {
                /* The image used */
                /* background-image: url("images\\background.jpg"); */
                /* background-repeat: repeat-y; */
                /* Full height */
                height: 100%;

                /* Center and scale the image nicely */
                background-position: center;
                background-size: cover;
            }

            .new-roman {
                font-family: 'Times New Roman', Times, serif;
                font-weight: bold;
            }
        </style>
    </head>

    <body class="new-roman" style="background-color : lightslategrey">

        <!-- navbar -->

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

        <div class="container py-5">

            <center>
                <div class="display-1 text-dark m-1 pb-5">LEVEL UP</div>
            </center>

            <form action="quiz.php" id="subject_select" method="POST">
                <div class="row mb-5">
                    <?php
                    while ($sub = $subject_stmt->fetch()) {
                    ?>
                        <div class="col-md-4 col-sm-6 pb-4">
                            <div class="card h-100 border-secondary">
                                <div class="card-body " style="background-color: #E7E3D4">
                                    <h5 class="card-title text-dark h1"><?php echo $sub->Subject ?></h5>
                                    <p class="card-text text-danger"><?php echo $sub->Description ?></p>
                                    <button type="submit" class="btn btn-primary" name="Subject" value="<?php echo $sub->Subject ?>">Begin...</button>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

            </form>

        </div>
        <!--end of container -->

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

        <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    </body>

    </html>

<?php
} else {
    echo "Not allowed";
}
?>