<?php
require_once("templates/header.php");


?>
<div class="container-fluid" id="main-container">
    <div class="col-md-12">
        <div class="row" id="auth-row">
            <div class="col-md-4" id="login-container">
                <h2>Login</h2>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Type your email">
                    </div>
                    <div class="form-group">
                        <label for="password">Passowrd:</label>
                        <input type="password" class="form-control" name="password" id="password"
                            placeholder="Type your password">
                    </div>
                    <input type="submit" class="btn card-btn" value="Login">
                </form>
            </div>
            <div class="col-md-4" id="register-container">
                <h2>Register</h2>
                <form action="" method="POST">
                    <input type="hidden" name="type" value="Register">
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Type your email">
                    </div>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last Name:</label>
                        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Lastname">
                    </div>
                    <div class="form-group">
                        <label for="password">Passowrd:</label>
                        <input type="password" class="form-control" name="password" id="password"
                            placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="confirmPassword">Passowrd:</label>
                        <input type="confirmPassword" class="form-control" name="confirmPassword" id="confirmPassword"
                            placeholder="Confirm your password">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
require_once("templates/footer.php");


?>