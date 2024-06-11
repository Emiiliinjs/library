<?php require "views/components/head.php"; ?>
<?php require "views/components/navbar.php"; ?>

<style>
  body {
    background: radial-gradient(circle, 
    rgba(185,193,208,1) 30%, 
    rgba(92,110,117,1) 79%, 
    rgba(83,85,98,1) 100%);
  }

  h4 {
    color: black;
  }

  h3 {
    color: black;
  }

  .card {
    max-width: 500px;
    width: 300px;
    width: auto;
    margin: 0 auto;
    margin-top: 150px;
    border-radius: 15px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    font-size: 20px;
    background-color: <?= $book["availability"] ? 'white' : 'transparent' ?>;
  }

  .card-header {
    margin-top: 40px;
    background-color: black;
    color: white;
    text-align: center;
    padding: 30px;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    font-size: 24px;
  }

  .card-body {
    padding: 30px;
    font-size: 24px;
  }

  .borrow-button   {
   background-color: black;
   color: white;
   border: none;
   padding: 15px 20px;
   border-radius: 10px;
   cursor: pointer;
   font-size: 20px;
   margin-bottom: 20px;
 }

  .borrow-button:hover {
    background-color: grey;
  }

</style>

<div class="card">
  <div class="card-header">
    <h1>Details:</h1>
  </div>
  <div class="card-body">
    <h3>Title:</h3><h4><?= $book["title"] ?></h4><br>
    <?php if ($book["availability"]) { ?>
      <h3>Author:</h3><h4><?= $book["author"] ?></h4><br>
      <h3>Published:</h3> <h4><?= $book["year"] ?></h4><br>
      <form method="POST" action="/borrow">
    <input type="hidden" name="bookId" value="<?= $book["id"] ?>">
    <button type="submit" name="borrow-button" class="borrow-button">Borrow Book</button>
</form>
    <?php } else { ?>
      <h4 style="color: red;">Book is currently unavailable</h4>
    <?php } ?>
  </div>
</div>

<?php require "views/components/footer.php"; ?>
