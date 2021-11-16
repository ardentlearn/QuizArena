<?php
session_start();
if (isset($_SESSION['admin_logged'])) {
?>


	<!DOCTYPE html>
	<html lang="en">

	<head>
		<title>Admin Home Page</title>
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
		<h1 style="text-align: center; color: red; margin-top: 50px; ">Welcome back Admin :)</h1>
		<div class="container">
			<div class="row">
				<div style="margin-left: 300px;margin-top: 50px;" class="col-md-3 col-sm-6">
					<div class="card text-center">
						<div style="margin: 20px;" class="card-block">
							<div class="card-title">
								<h1>Add Question & Answers</h1>
							</div>
							<a style="margin-left: 10px;" class="btn btn-success" href="question_answer.php">Click here</a>
						</div>
					</div>
				</div>
				<div style="margin-top: 50px;" class="col-md-3 col-sm-6">
					<div class="card text-center">
						<div class="card-block">
							<div style="margin: 30px;" class="card-title">
								<h1 style="margin-top: 10px;">Add new Subject</h1>
							</div>
							<a style="margin: 20px;" class="btn btn-success" href="subject.php">Click here</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	</body>

	</html>

<?php

} else {
	echo "<center><h1>NOT ALLOWED </h1></center>";
}
?>