<?php
session_start();
if (isset($_SESSION['admin_logged'])) {
?>

    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <title>Question and answer</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light " style="background-color:#C4DBF6">
            <a class="navbar-brand" href="adminmainpage.php">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto pr-3">
                    <li class="nav-item active nav navbar-right">
                        <a class="nav-link" href="logout.php">Logout <span class="sr-only">(current)</span></a>
                    </li>



                </ul>
            </div>
        </nav>

        <div class="container pb-5">


            <center>
                <div class="display-4 text-primary pb-2">Add new questions</div>
            </center>

            <form method="POST" action="question_answer_update.php">
                <div class="form-group">
                    <label for="Question" class="h6">Question</label>
                    <input type="text" class="form-control" id="Question" name="Question" required>
                </div>
                <div class="form-group">
                    <label for="Option1" class="h6">Option A</label>
                    <input type="text" class="form-control" id="Option1" name="option1" required>
                </div>
                <div class="form-group">
                    <label for="Option2" class="h6">Option B</label>
                    <input type="text" class="form-control" id="Option2" name="option2" required>
                </div>
                <div class="form-group">
                    <label for="Option3" class="h6">Option C</label>
                    <input type="text" class="form-control" id="Option3" name="option3" required>
                </div>
                <div class="form-group">
                    <label for="Option4" class="h6">Option D</label>
                    <input type="text" class="form-control" id="Option4" name="option4" required>
                </div>
                <div class="form-group">
                    <label for="correct_ans" class="h6">Correct Answer</label>
                    <select class="form-control" id="correct_ans" name="correct_ans" required>
                        <option>Select</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Subject" class="h6">Subject</label>
                    <select class="form-control" id="Subject" name="Subject" required>
                        <option>Select</option>
                        <option value="Data Structure">Data Structure</option>
                        <option value="DBMS">DBMS</option>
                        <option value="HTML">HTML</option>
                        <option value="Java">Java</option>
                        <option value="Javascript">Javascript</option>
                        <option value="Python">Python</option>
                    </select>
                </div>
                <center>
                    <button class="btn btn-primary" type="submit" name="q&a_submit" value="q&a_submit">Submit</button>
                </center>
            </form>

            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

            <!-- Option 2: Separate Popper and Bootstrap JS -->
            <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->


        </div>
    </body>

    </html>

<?php

} else {
    echo "<center><h1>NOT ALLOWED </h1></center>";
}
?>