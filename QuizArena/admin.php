<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <fieldset style="height: 300px;width: 500px;position: absolute;border: solid black;margin: 30px;padding: 20px;top: 50%;left: 50%;transform: translate(-50%,-50%);">
        <h2>Admin Login</h2>
        <form action="admincheck.php" method="POST">
            <div class="mb-3">
                <label for="admin_email" class="form-label">Email address</label>
                <input type="email" name="user" placeholder="Username" autocomplete="off" class="form-control" id="admin_email" required>
            </div>
            <div class="mb-3">
                <label for="admin_pass" class="form-label">Password</label>
                <input type="password" name="pass" placeholder="Password" class="form-control" id="admin_pass" required>
            </div>
            <button type="submit" value="login" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </fieldset>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>