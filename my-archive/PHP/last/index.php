<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8" />

    <title>LOGIN</title>

    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<body>
    <div class="container">
        <div class="login-box">
            <div class="row">
                <div class="col-md- login-left">
                    <h2>Login here</h2>
                    <form action="validation.php" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="user" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
                <div class="col-md-6 login-right">
                    <h2>Register here</h2>
                    <form action="registration.php" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="user" class="form-control" minlength="8" required required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" minlength="8" requiredrequired>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>