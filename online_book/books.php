<?php
  session_start();
  $count = 0;
  // connecto database
  require_once "./functions/database_functions.php";
  $conn = db_connect();

  $query = "SELECT * FROM books";
  $result = mysqli_query($conn, $query);
  if(!$result){
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
  }

  $title = "Full Catalogs of Books";
  require_once "./template/header.php";
?>
  <p class="lead text-center text-muted">Full Catalogs of Books</p>
    <?php for($i = 0; $i < mysqli_num_rows($result); $i++){ ?>
      <div class="row-grid">
        <?php while($query_row = mysqli_fetch_assoc($result)){ ?>
      		<a href="book.php?bookisbn=<?php echo $query_row['book_isbn']; ?>" class="product">
          <div class="sale">-20%</div>
           <img class="product-img" src="./bootstrap/img/<?php echo $query_row['book_image']; ?>">
           <h2 class="product-name"><?php echo $query_row["book_title"] ?></h2>
           <p class="product-price"><?php echo number_format($query_row["book_price"]) ?></p>
           <button class="product-btn">Mua Ngay</button>
          </a>
        <?php } ?> 
      </div>
<?php
      }
  if(isset($conn)) { mysqli_close($conn); }
  require_once "./template/footer.php";
?>