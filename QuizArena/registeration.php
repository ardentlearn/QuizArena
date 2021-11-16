
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration</title>
</head>
<style>
* {
    box-sizing: border-box;
}

/* Full-width input fields */
input[type=text],
input[type=password],
input[type=email] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus,
input[type=password]:focus input[type=email]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity: 1;
}

.card2 {

    background-color: #4CAF50;
    padding: 200px 200px 200px 200px;
    margin: 100px 60px 30px 40px;
    border: none;
    cursor: pointer;
    /* background-image: url('qimg.jfif'); */
    background-color: lightslategray;
    border-radius: 50%;
    background-repeat: no-repeat;
    background-size: cover;
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,
.resetbtn {
    float: left;
    width: 50%;
}

.signupbtn {
    float: left;
    width: 100%;
}

.resetbtn {
    background-color: #2363ec;

}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* The Modal (background) */
.modal {
    display: none;
    /* Hidden by default */
    position: fixed;
    /* Stay in place */
    z-index: 1;
    /* Sit on top */
    left: 0;
    top: 0;
    width: 100%;
    /* Full width */
    height: 100%;
    /* Full height */
    overflow: auto;
    /* Enable scroll if needed */
    background-color: #474e5d;
    padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto;
    /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 50%;
    /* Could be more or less, depending on screen size */
}

Style the horizontal ruler hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}

.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {

    .cancelbtn,
    .signupbtn {
        width: 100%;
    }
}
</style>


<body class="card2" onload="document.getElementById('id02').style.display='block'" style="width:auto">
    <div class="col-lg-6">
        <fieldset class="align-self-center">



            <!-- <button class="card2" onclick="document.getElementById('id02').style.display='block'"
                style="width:auto;"></button>-->

            <div id="id02" class="modal">
                <span onclick="document.getElementById('id02').style.display='none'" class="close"
                    title="Close Modal">&times;</span>
                <form class="modal-content" onsubmit="return validateForm()" action="insertData.php" method="post">
                    <div class=" container">
                        <h1>Sign Up</h1>
                        <p>Please fill in this form to create an account.</p>
                        <hr>
                        <label for="fname"><b>Name</b></label>
                        <input type="text" placeholder="Enter Full Name" name="fname" id="fname" value="" required>
                        
                        <label for="email"><b>Email</b></label>
                        <input type="email" placeholder="Enter Email" name="email" id="email" value="" required>

                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" id="psw" value="" onkeyup='check();' required>
                        

                        <label for="psw-repeat"><b>Repeat Password</b></label>
                        <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" value=""
                        onkeyup='check();' required>
                        <span id='message'></span>

                        <label>
                            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px">
                            Remember me
                        </label>

                        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms &
                                Privacy</a>.</p>

                        <div class="clearfix">
                            <button type="button" onclick="document.getElementById('id02').style.display='none'"
                                class="cancelbtn">Cancel</button>
                            <button type="reset" value="Reset" class="resetbtn">Reset</button>
                            <button type="submit" class="signupbtn">Sign Up</button>
                        </div>
                    </div>
                </form>
            </div>
            <script>
            var check = function() {
                if (document.getElementById('psw').value ==
                    document.getElementById('psw-repeat').value) {
                    document.getElementById('message').style.color = 'green' ;
                    document.getElementById('message').innerHTML = 'matching';
                } else {
                    document.getElementById('message').style.color = 'red';
                    document.getElementById('message').innerHTML = 'not matching';
                }
            }
            </script>

</body>


</html>