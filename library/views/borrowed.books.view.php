<?php require "views/components/head.php"; ?>
<?php require "views/components/navbar.php"; ?>

<style>
   body{
    background-color: #808080;
   }

   h4{
    color: grey;
   }

   h3{
    color: black;
   }

   .book-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    margin-top: 120px;
    margin-left: auto;
    margin-right: auto;
  }

  .book-card {
    width: auto;
    min-width:300px;
    max-width: 400px;
    border-radius: 15px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    height: auto;
    overflow: hidden;
    font-size: 20px;
    cursor: pointer; /* Add cursor pointer to indicate it's clickable */
    background-color: white;
  }

  .book-card:hover {
    transform: translateY(-5px);
    transition: 0.4s; 
  }

  .book-details {
    padding: 30px;
  }

  .book-title {
    margin: 0;
    font-size: 30px;
    text-align: center;
    color: white;
    padding: 20px 0;
    background-color: black;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
  }


  .button-container {
    display: flex;
    justify-content: center;
    margin-top: 20px; 
    padding: 0 30px;
  }

  
  .poga
  {
   background-color: black;
   color: white;
   border: none;
   padding: 15px 20px;
   border-radius: 10px;
   cursor: pointer;
   font-size: 20px;
   margin-bottom: 20px;
 }

  .poga:hover
   {
    background-color: grey;
  }

  a {
    text-decoration: none;
  }

  .book-title{
    font-size:24px;
  }

 
  .b-t{
    font-size: 30px;
    text-align: center;
    color: white;
    padding: 20px 0;
    background-color: black;
  }</style>

<h1 class="b-t">Borrowed Books</h1>

<div class="book-container">
  <?php foreach ($books as $book): ?>
    <div class="book-card">
      <h2 class="book-title"><?= $book['title'] ?></h2>
      <div class="book-details">
        <h4>Author:</h4> <h3><?= $book['author'] ?></h3>  <br>
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
