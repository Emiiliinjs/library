<?php require "components/navbar.php" ?>

<style>
   body {
    background: linear-gradient(135deg, #3a3a3a, #787878);
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    color: #fff;
   }

  .card {
    width: 90%;
    max-width: 500px;
    min-width: 300px;
    margin: 0 auto;
    border-radius: 15px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
    background-color: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    color: #fff;
  }

  .card-header {
    background-color: rgba(0, 0, 0, 0.8);
    color: white;
    text-align: center;
    padding: 20px;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    font-size: 24px;
  }

  .card-body {
    padding: 20px;
  }

  .create-input {
    margin-bottom: 15px;
    padding: 12px;
    border: 2px solid white;
    border-radius: 6px;
    font-size: 18px;
    width: 100%;
    box-sizing: border-box;
    background-color: transparent;
    color: white;
  }

  .create-input::placeholder {
    color: #ddd;
  }

  .error {
    color: red;
    margin-top: 5px;
    font-size: 14px;
  }

  #create-poga {
    background-color: rgba(0, 0, 0, 0.8);
    color: white;
    border: none;
    padding: 15px 20px;
    border-radius: 8px;
    cursor: pointer;
    font-size: 20px;
    width: 100%;
    box-sizing: border-box;
    transition: background-color 0.3s;
  }

  #create-poga:hover {
    background-color: grey;
  }

  @media (max-width: 600px) {
    .card-header, .card-body {
      padding: 15px;
    }

    .create-input {
      padding: 10px;
      font-size: 16px;
    }

    #create-poga {
      padding: 12px;
      font-size: 18px;
    }
  }
</style>

<div class="card">
  <div class="card-header">
    <h1>Create a Book</h1>
  </div>
  <div class="card-body">
    <form id="create-form" action="" method="post">
      <label for="title">
        Title:<br>
        <input class="create-input" type="text" id="title" name="title" placeholder="Enter book title" value="<?= isset($_POST["title"]) ? htmlspecialchars($_POST["title"]) : '' ?>" required />
      </label>
      <?php if (isset($errors["title"])) : ?>
        <p class="error"><?= htmlspecialchars($errors["title"]) ?></p>
      <?php endif; ?>
      <label for="author">
        Author:<br>
        <input class="create-input" type="text" id="author" name="author" placeholder="Enter author's name" value="<?= isset($_POST["author"]) ? htmlspecialchars($_POST["author"]) : '' ?>" required />
      </label>
      <?php if (isset($errors["author"])) : ?>
        <p class="error"><?= htmlspecialchars($errors["author"]) ?></p>
      <?php endif; ?>
      <label for="year">
        Year:<br>
        <input class="create-input" type="number" id="year" name="year" placeholder="Enter publication year" value="<?= isset($_POST["year"]) ? htmlspecialchars($_POST["year"]) : '' ?>" required />
      </label>
      <?php if (isset($errors["year"])) : ?>
        <p class="error"><?= htmlspecialchars($errors["year"]) ?></p>
      <?php endif; ?>
      <label for="availability">
        Availability:<br>
        <select class="create-input" id="availability" name="availability">
          <option value="1" <?= (isset($_POST["availability"]) && $_POST["availability"] == '1') ? 'selected' : '' ?>>Available</option>
          <option value="0" <?= (isset($_POST["availability"]) && $_POST["availability"] == '0') ? 'selected' : '' ?>>Not Available</option>
        </select>
      </label>
      <?php if (isset($errors["availability"])) : ?>
        <p class="error"><?= htmlspecialchars($errors["availability"]) ?></p>
      <?php endif; ?>
      <button id="create-poga" type="submit">Save</button>
    </form>
  </div>
</div>

<?php require "components/footer.php" ?>
