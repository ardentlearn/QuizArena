<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
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
    input[type=password]:focus 
    input[type=email]:focus{
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

    /* Extra styles for the cancel button */
    .cancelbtn {
        padding: 14px 20px;
        background-color: #f44336;
    }

    /* Float cancel and signup buttons and add an equal width */
    .cancelbtn,
    .updatebtn {
        float: left;
        width: 50%;
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
        /* background-image: url('qimg.jfif'); */
        background-color: #474e5d;
        background-repeat: no-repeat;
        background-size: 100%;
        opacity: 0.8;
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

    /* Style the horizontal ruler */
    hr {
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
        .updatebtn {
            width: 100%;
        }
    }
    </style>
</head>

<body onload="document.getElementById('id03').style.display='block'" style="width:auto;">
    

    <div id="id03" class="modal">
        <span onclick="document.getElementById('id03').style.display='none'" class="close"
            title="Close Modal">&times;</span>

        <form class="modal-content" action="update.php" method="post">
            <div class="container">
                <h1>Change Password</h1>
                <p>Please fill this form to change password of your account.</p>
                <hr>

                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Enter Email" name="email" required >

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" id="pswd1"  onkeyup='check();' required>

                <label for="psw-repeat"><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat Password" name="psw-repeat" id="pswd2"  onkeyup='check();' required>
                <span id='message'></span>

                <p>By updating an account you agree to our <a href="#" style="color:dodgerblue">Terms &
                        Privacy</a>.</p>

                <div class="clearfix">
                    <button type="button" onclick="document.getElementById('id03').style.display='none'"
                        class="cancelbtn">Cancel</button>
                    <button type="submit" class="updatebtn">Update</button>
                </div>
            </div>
        </form>
    </div>
    <script>
    /* var modal = document.getElementById('id03');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }*/

    var check = function() {
                if (document.getElementById('pswd1').value ==
                    document.getElementById('pswd2').value) {
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