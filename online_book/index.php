<?php
  session_start();
  $count = 0;
  // connecto database
  
  $title = "Index";
  require_once "./template/header.php";
  require_once "./functions/database_functions.php";
  $conn = db_connect();
  $row = select4LatestBook($conn);
?>
      <!-- Example row of columns -->
      <h1 class="home-title">Sản Phẩm Bán Chạy</h1>
      <div class="row-grid">
        <?php foreach($row as $watch) { ?>
      		<a href="book.php?bookisbn=<?php echo $watch['book_isbn']; ?>" class="product">
          <div class="sale">-20%</div>
           <img class="product-img" src="./bootstrap/img/<?php echo $watch['book_image']; ?>">
           <h2 class="product-name"><?php echo $watch["book_title"] ?></h2>
           <p class="product-price"><?php echo number_format($watch["book_price"]) ?></p>
           <button class="product-btn">Mua Ngay</button>
          </a>
        <?php } ?>
      </div>
<?php
  if(isset($conn)) {mysqli_close($conn);}
  require_once "./template/footer.php";
?>