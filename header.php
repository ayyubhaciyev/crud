<!DOCTYPE html>
<html>
  <head>
    <?php
    date_default_timezone_set('Asia/Baku');
    require_once 'db.php';
    $db = new DBConnection();

    require_once 'class.php';
    require_once 'code.php';


     ?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <title>CRUD</title>
  </head>
  <body>
    <nav>
      <div class="nav-wrapper">
        <a href="#" class="brand-logo">CRUD</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="index.php">İşçilərin Siyahısı</a></li>
          <li><a href="qeydiyyat.php">İşçilərin Qeydiyyatı</a></li>
        </ul>
      </div>
    </nav>
