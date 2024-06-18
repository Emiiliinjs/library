<?php require "components/navbar.php" ?>
<link rel="stylesheet" href="views/style/show.css">
<div class="card">
  
    <h1 class="vr">Details:</h1>
 
  <div class="card-body">
    <h3>Title:</h3><h4><?= $book["title"] ?></h4><br>
    <?php if ($book["availability"]) { ?>
      <h3>Author:</h3><h4><?= $book["author"] ?></h4><br>
      <h3>Year:</h3> <h4><?= $book["year"] ?></h4><br>
      <form method="POST" action="/borrow">
        <input type="hidden" name="bookId" value="<?= $book["id"] ?>">
        <button type="submit" name="borrow-button" class="borrow-button">Borrow Book</button>
      </form>
    <?php } else { ?>
    <?php } ?>
  </div>
</div>
