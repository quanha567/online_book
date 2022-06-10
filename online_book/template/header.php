<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="./bootstrap/css/app.css?v=<?php echo time(); ?>">
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </head>

  <body>
    <div class="app">
      <header class="header">
        <div class="center">
        <nav class="navbar">
          <a class="logo" href="/online_book">GUCCI</a>
          <div class="navbar-list">
            <a class="navbar-items active" href="/online_book">
              <ion-icon name="home-outline"></ion-icon>
              <span class="text">Trang Chủ</span>
            </a>
            <a class="navbar-items" href="books.php">
              <ion-icon name="watch-outline"></ion-icon>
              <span class="text">Sản Phẩm</span>
            </a>
            <a class="navbar-items" href="publisher_list.php">
              <ion-icon name="receipt-outline"></ion-icon>
              <span class="text">Giới Thiệu</span>
            </a>
            <a class="navbar-items" href="contact.php">
              <ion-icon name="call-outline"></ion-icon>
              <span class="text">Liên Hệ</span>
            </a>
          </div>
          <div class="cart">
            <a href="cart.php">
              <ion-icon name="cart-outline"></ion-icon>
              <span class="cart-number">0</span>
            </a>
          </div>
        </nav>
        </div>
      </header>

    <div class="container" id="main">