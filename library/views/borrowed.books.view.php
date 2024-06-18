<?php require "views/components/head.php"; ?>
<?php require "views/components/navbar.php"; ?>

<link rel="stylesheet" href="views/style/books.css"> 


<div class="book-container">
  <?php foreach ($books as $book): ?>
    <div class="book-card">
      <h2 class="book-title"><?= $book['title'] ?></h2>
      <div class="book-details">
        <h4>Author:</h4> <h3><?= $book['author'] ?></h3> <br>
        <h4>Published Year:</h4> <h3><?= $book['year'] ?></h3> <br>
      </div>
      <div class="button-container">
        <form method="POST" action="/return">
          <input type="hidden" name="bookId" value="<?= $book["id"] ?>">
          <button class="poga" type="submit" name="return-button">Return Book</button>
        </form>
      </div>
    </div>
  <?php endforeach; ?>
</div>

<?php require "views/components/footer.php"; ?>
