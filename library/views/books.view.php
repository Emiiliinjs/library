<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>
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
    background-color: <?= $book["availability"] ? 'white' : 'transparent' ?>; /* Conditional background color */
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
    justify-content: space-between;
    margin-top: 20px; 
    padding: 0 30px;
  }

  .delete-poga
   {
    background-color: red;
    color: white;
    border: none;
    padding: 15px 20px;
    border-radius: 10px;
    cursor: pointer;
    font-size: 20px;
    margin-bottom: 20px;
  }

  .delete-poga:hover
  {
    background-color: grey;
  }
 
  .edit-poga
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

  .edit-poga:hover
   {
    background-color: grey;
  }

  a {
    text-decoration: none;
  }

  .book-title{
    font-size:24px;
  }

  .available {
    color: #00FF40;
    background-color: white; /* Set background color to white for available books */
  }

  .unavailable {
    color: red;
  }

  .b-t{
    font-size: 30px;
    text-align: center;
    color: white;
    padding: 20px 0;
    background-color: black;
  }
</style>
<h1 class="b-t">Books</h1>

<div class="book-container">
  <?php foreach($books as $book) { ?>
    <a href="/show?id=<?= $book["id"] ?>" class="book-card <?= $book["availability"] ? 'available' : 'unavailable' ?>"> <!-- Wrap the card contents in anchor tag -->
      <h2 class="book-title"><?= $book["title"] ?></h2>
      <div class="book-details">
        <h4>Author:</h4> <h3><?= $book["author"] ?></h3>  <br>
        <h4>Published Year:</h4> <h3><?= $book["year"] ?></h3> <br>
        <h4>Availability:</h4> <h3 class="<?= $book["availability"] ? 'available' : 'unavailable' ?>"><?= $book["availability"] ? 'Available' : 'Not available' ?></h3>
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
  <?php } ?>
</div>

<?php require "components/footer.php" ?>
