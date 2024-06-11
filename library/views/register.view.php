<?php require "components/head.php" ?>

<style>
  body {
    background-color: #f0f0f0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    margin: 0;
    font-family: Arial, sans-serif;
  }

  .card {
    width: 90%;
    max-width: 500px;
    background-color: #2e2e2e;
    border-radius: 12px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  .card-header {
    padding: 20px;
    text-align: center;
    background-color: #404040;
    color: #f0f0f0;
    border-top-left-radius: 12px;
    border-top-right-radius: 12px;
    font-size: 22px;
  }

  .card-body {
    padding: 20px;
  }

  .form-group {
    margin-bottom: 20px;
  }

  label {
    display: block;
    margin-bottom: 8px;
    color: #f0f0f0;
    font-size: 18px;
  }

  input[type="email"],
  input[type="password"] {
    width: 97%;
    padding: 12px;
    border: 2px solid #ccc;
    border-radius: 6px;
    font-size: 16px;
    background-color: #404040;
    color: #f0f0f0;
  }

  input[type="email"]::placeholder,
  input[type="password"]::placeholder {
    color: #a0a0a0;
  }

  .error {
    color: red;
    margin-top: 8px;
    font-size: 14px;
  }

  .explanation {
    color: #f0f0f0;
    font-size: 14px;
    margin-top: 5px;
  }

  button[type="submit"] {
    width: 100%;
    background-color: #404040;
    color: #f0f0f0;
    height: 50px;
    border: none;
    padding: 10px;
    border-radius: 10px;
    cursor: pointer;
    transition: background-color 0.3s;
    font-size: 18px;
  }

  button[type="submit"]:hover {
    background-color: #606060;
  }

  .register-link {
    display: block;
    text-align: center;
    color: #f0f0f0;
    text-decoration: none;
    margin-top: 20px; 
    font-size: 18px; 
  }

  .register-link:hover {
    color: #a0a0a0;
  }

  .flash {
    text-align: center;
    margin-top: 20px;
    color: #28a745;
    font-size: 18px;
  }

  @media (max-width: 600px) {
    .card-header, .card-body {
      padding: 15px;
    }

    label {
      font-size: 16px;
    }

    input[type="email"],
    input[type="password"] {
      padding: 10px;
      font-size: 14px;
    }

    button[type="submit"] {
      height: 45px;
      font-size: 16px;
    }

    .register-link, .flash {
      font-size: 16px;
    }
  }
</style>

<div class="card">
  <div class="card-header">
    <h1>Register</h1>
  </div>
  <div class="card-body">
    <form method="POST" class="register-form">
      <div class="form-group">
        <label for="email">Email:</label>
        <input id="email" name="email" type="email" class="form-control" placeholder="Enter your email" required/>
        <?php if(isset($errors["email"])) {?>
          <p class="error"><?= $errors["email"] ?></p>
        <?php } ?>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input id="password" name="password" type="password" class="form-control" placeholder="Enter your password" required/>
        <?php if(isset($errors["password"])) {?>
          <p class="error"><?= $errors["password"] ?></p>
        <?php } ?>
        <span class="explanation">(must contain at least 8 characters, 1 uppercase, 1 lowercase, 1 special character, and 1 digit)</span>
      </div>
      <button type="submit" class="btn btn-primary">Register</button>
    </form>
    <a href="/login" class="register-link">Already have an account? Login</a>
  </div>
</div>

<?php if(isset($_SESSION["flash"])) { ?>
  <p class="flash"><?= $_SESSION["flash"] ?></p>
<?php } ?>

<?php require "views/components/footer.php" ?>
