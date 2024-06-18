<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>


<h1>All Books</h1>
<div class="book-container">
  <?php foreach($books as $book): ?>
    <a href="/show?id=<?= $book["id"] ?>" class="book-card <?= $book["availability"] ? 'available' : 'unavailable' ?>">
      <h2 class="book-title"><?= $book["title"] ?></h2>
      <div class="book-details">
        <h4>Author:</h4>
        <h3><?= $book["author"] ?></h3>
        <h4>Year:</h4>
        <h3><?= $book["year"] ?></h3>
        <h4>Availability:</h4>
        <h3 class="<?= $book["availability"] ? 'available' : 'unavailable' ?>">
          <?= $book["availability"] ? 'Available' : 'Not available' ?>
        </h3>
      </div>
      <div class="button-container">
        <form class="delete-form" method="POST" action="/delete">
          <button class="delete-poga" name="id" value="<?= $book["id"] ?>">Delete</button>
        </form>
        <form class="edit-form" method="GET" action="/edit">
          <input type="hidden" name="id" value="<?= $book["id"] ?>">
          <button class="edit-poga" type="submit">Edit</button>
        </form>
      </div>
    </a>
  <?php endforeach; ?>
</div>

<?php require "components/footer.php" ?>
<link rel="stylesheet" href="views/style/books.css"> 
