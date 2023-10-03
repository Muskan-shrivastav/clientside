<html>
    <head>
        <title>login and registration</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="style1.css">
    </head>
    <body>
        <div class="container">
            <div class="login-box">
            <div class="row">
                <div class="col-md-6 login-left">
                    <h2>Login Here</h2>
                    <form action="validation.php" method="post">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name = "user" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name = "password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">LOgin</button>
                    </form>
                </div>
                <div class="col-md-6 login-right">
                    <h2>Register Here</h2>
                    <form action="registration.php" method="post">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name = "user" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name = "password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Register
                    </form>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>