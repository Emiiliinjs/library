<?php require "components/head.php"; ?>
<?php require "components/navbar.php"; ?>


<style>
   body{
    background-color: #808080;
   }

    .card {
        width: auto;
        max-width: 500px;
        min-width: 300px;
        margin: 0 auto;
        margin-top: 150px;
        border-radius: 12px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    }

    .card-header {
        margin-top: 30px;
        background-color: black;
        color: white;
        padding: 30px;
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
        text-align: center;
        font-size: 24px;
    }

    .card-body {
        padding: 30px;
        font-size: 24px;
    }

    .create-input {
        margin-bottom: 20px;
        padding: 12px;
        border: 2px solid black;
        border-radius: 6px;
        font-size: 22px;
        width: 100%;
        box-sizing: border-box;
        background-color: transparent;
    }

    .error {
        color: red;
        margin-top: 10px;
        font-size: 18px;
    }

    #edit-poga {
        background-color: black;
        color: white;
        border: none;
        padding: 15px 20px;
        border-radius: 8px;
        cursor: pointer;
        font-size: 22px;
        width: 100%;
        box-sizing: border-box;
    }

    #edit-poga:hover {
        background-color: grey;
        transition: 0.4s;
    }
</style>


<div class="card">
    <div class="card-header">
        <h1>Edit Book</h1>
    </div>
    <div class="card-body">
        <form method="POST" action="/edit">
            <input type="hidden" name="id" value="<?= htmlspecialchars($_GET['id'] ?? '', ENT_QUOTES, 'UTF-8') ?>">

            <!-- Input fields for editing book data -->
            <label for="title">Title:</label><br>
            <input class="create-input" type="text" id="title" name="title" value="<?= htmlspecialchars($book['title'] ?? '', ENT_QUOTES, 'UTF-8') ?>" required><br>
            <?php if (isset($errors['title'])): ?>
                <div class="error"><?= htmlspecialchars($errors['title'], ENT_QUOTES, 'UTF-8') ?></div>
            <?php endif; ?>

            <label for="author">Author:</label><br>
            <input class="create-input" type="text" id="author" name="author" value="<?= htmlspecialchars($book['author'] ?? '', ENT_QUOTES, 'UTF-8') ?>" required><br>
            <?php if (isset($errors['author'])): ?>
                <div class="error"><?= htmlspecialchars($errors['author'], ENT_QUOTES, 'UTF-8') ?></div>
            <?php endif; ?>

            <label for="year">Year:</label><br>
            <input class="create-input" type="number" id="year" name="year" value="<?= htmlspecialchars($book['year'] ?? '', ENT_QUOTES, 'UTF-8') ?>" required><br>
            <?php if (isset($errors['year'])): ?>
                <div class="error"><?= htmlspecialchars($errors['year'], ENT_QUOTES, 'UTF-8') ?></div>
            <?php endif; ?>

            <button id="edit-poga" type="submit">Update</button>
        </form>
    </div>
</div>

<?php require "components/footer.php"; ?>
