<?php
session_start();
require 'dbcon.php';
?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN</title>
    <style>
        input[type=checkbox] {
            -ms-transform: scale(1.2);
            -moz-transform: scale(1.2);
            -webkit-transform: scale(1.2);
            -o-transform: scale(1.2);
            padding: 5px;
        }
    </style>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript">
        function change_char() {

            var pass = document.getElementById("password");
            var checkbox = document.getElementById("cb");

            if (pass.type == "password") {
                pass.type = "text";
                checkbox.checked = true;
            } else {
                pass.type = "password";
                checkbox.checked = false;
            }
        }

        $(document).ready(function() {
            $('#generate_pass').click(function() {
                $.post('generate.php', function(result) {
                    $('#password').val(result);
                });
            });
        });
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <div class="login-box">
            <div class="row">
                <div class="col-md-6 login-right">
                    <h2>Register here</h2>

                    <form action="registration.php" method="post">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="firstname" class="form-control" minlength="8" required>
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="Lastname" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control" required>
                        </div>
                        <!-- <div class="form-group">
                            <label>Password</label>
                            <input type="text" name="password" class="form-control" minlength="8" required required>
                        </div> -->


                        Password</br>
                        <input type="password" name="password" id="password" class="form-control">
                        <input type="button" name="generate_pass" id="generate_pass" value="Generate Password"></br>
                        <input type="checkbox" name="checkbox" id="cb" onClick="change_char();"> Show Characters
                        <br><br>
                        <button type="submit" class="btn btn-primary">Sign up</button>
                        <a href="login.php">login</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>

</html>