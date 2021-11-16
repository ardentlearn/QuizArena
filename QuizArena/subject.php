<?php
session_start();
if (isset($_SESSION['admin_logged'])) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Add Subject</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
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
        <fieldset style="height: 200px;width: 300px;position: absolute;border: solid black;margin: 30px;padding: 20px;top: 50%;left: 50%;transform: translate(-50%,-50%);">
            <div class="col-lg-8">
                <form action="admincheck.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label"><strong>Add New Subject</strong></label>
                        <input type="text" name="subject" placeholder="Subject" class="form-control">
                    </div>

                    <button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </fieldset>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>

    </html>
<?php

} else {
    echo "<center><h1>NOT ALLOWED </h1></center>";
}
?>