<!DOCTYPE html>
<html lang="en">

<head>
	<title>Qestion and Answer Page</title>
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-social.css">
</head>
<body>
	<div class="row">
		<div class="col-lg-12">
			<div style="background: darkgrey;" class="card">
				<div style="margin-left: 300px;" class="card-body">
					<div class="col-lg-8">
						<form name="form1" action="" method="POST">
						<div class="card">
							<div style="text-align: center;" class="card-header"><strong>Add New Question</strong></div>
							<div style="height: 700px;" class="card-body card-block">
								<div class="form-group">
									<label for="company" class="form-control-label">Subject</label>
									<input type="text" name="Subject" placeholder="Subject" style="width: 100px;" 
									class="form-control">
								</div>
								<div class="form-group">
									<label for="company" class="form-control-label">Question</label>
									<input type="text" name="Question" placeholder="Question" style="width: 500px;" class="form-control">
								</div>
								<div class="form-group">
									<label for="company" class="form-control-label">Option1</label>
									<input type="text" name="Opt1" placeholder="Option1" style="width: 100px;" 
									class="form-control">
								</div>
								<div class="form-group">
									<label for="company" class="form-control-label">Option2</label>
									<input type="text" name="Opt2" placeholder="Option2" style="width: 100px;"
									 class="form-control">
								</div>
								<div class="form-group">
									<label for="company" class="form-control-label">Option3</label>
									<input type="text" name="Opt3" placeholder="Option3" style="width: 100px;"
									 class="form-control">
								</div>
								<div class="form-group">
									<label for="company" class="form-control-label">Option4</label>
									<input type="text" name="Opt4" placeholder="Option4" style="width: 100px;" 
									class="form-control">
								</div>
								<div class="form-group">
									<label for="company" class="form-control-label">Correct Answer</label>
									<input type="text" name="answer" placeholder="Answer" style="width: 100px;"
									 class="form-control">
								</div>
								<div style="text-align: center;" class="form-group">
									<input type="submit" name="submit" value="Upload Question" style="margin-top: 30px;" class="btn btn-success">
								</div>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

<script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="bootstrap.min.js"></script> 
</body>
</html>