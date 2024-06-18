<?php require "components/navbar.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Book</title>
    <link rel="stylesheet" href="views/style/create.style.css">
</head>
<body>

<div class="card">
    <div class="card-header">
        <h1>Create</h1>
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
            <button id="create-poga" type="submit">Create Book</button>
        </form>
    </div>
</div>

<?php require "components/footer.php" ?>

</body>
</html>
