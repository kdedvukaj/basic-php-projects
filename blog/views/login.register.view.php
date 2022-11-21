<?php require_once 'partials/top.php' ?>

<nav class="navbar navbar-expand navbar-light bg-light">
    <a href="" class="navbar-brand">Blogger</a>
    <ul class="navbar-nav ms-auto">
        <li class="nav-item">
            <a href="index.php" class="nav-link">Back to Blog</a>
        </li>
    </ul>
</nav>

<div class="jumbotron text-center">
    <h4 class="mb-5">Login/Register</h4>
</div>
<div class="container">
    <div class="row">
        <div class="col-6">
            <h4 class="mb-5">Login</h4>
            <form action="login_register.php" method="post">
                <input type="text" name="login_email" placeholder="email" class="form-control" required><br>
                <input type="password" name="passsword" placeholder="password" class="form-control" required><br><br>
                <button class="form-control btn btn-primary" name="loginBtn">Login</button>
            </form>
        </div>
        <div class="col-6">
            <h4>Register</h4>
            <form action="login_register.php" method="post">
                <input type="text" name="register_name" placeholder="name" class="form-control" required><br>
                <input type="email" name="register_email" placeholder="email" class="form-control" required><br>
                <input type="password" name="register_password" placeholder="password" class="form-control" required><br>
                <button class="form-control btn btn-warning" name="registerBtn">Register</button>
            </form>
        </div>
    </div>
</div>
<?php require_once 'partials/bottom.php' ?>