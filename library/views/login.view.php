<?php require "components/head.php"; ?>
<link rel="stylesheet" href="views/style/auth.css">
<div class="card">
    <div class="card-header">
        <h1>Login</h1>
    </div>
    <div class="card-body">
        <form method="POST" class="login-form">
            <div class="form-group">
                <label for="email">Email:</label>
                <input id="email" name="email" type="email" class="input-control" placeholder="Enter your email" required/>
                <?php if(isset($errors["email"])) {?>
                    <p class="error"><?= $errors["email"] ?></p>
                <?php } ?>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input id="password" name="password" type="password" class="input-control" placeholder="Enter your password" required/>
                <?php if(isset($errors["password"])) {?>
                    <p class="error"><?= $errors["password"] ?></p>
                <?php } ?>
                <?php if(isset($_SESSION["flash"])) { ?>
                    <p class="flash"><?= $_SESSION["flash"] ?></p>
                <?php } ?>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <a href="/register" class="btn btn-primary">Register</a>
        </form>
    </div>
</div>
<?php require "views/components/footer.php"; ?>
