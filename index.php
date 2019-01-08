<!DOCTYPE HTML>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Portfolio - Gąsławski Ireneusz</title>
    <meta name="description" content="portfolio">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <!-- <link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet"> -->
    <link href='https://fonts.googleapis.com/css?family=Indie+Flower|Kalam&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontello.css" type="text/css"/>
    <link rel="stylesheet" href="css/styles.css" type="text/css"/>
    <style>
        body {
          /* Background pattern from Toptal Subtle Patterns */
          background-image: url("img/noisy_net_@2X.png");
          /* font-family: 'Lato', sans-serif; */
          font-family: 'Kalam';
        }
    </style>
  </head>
  <body>
    <?php require_once 'navigation.php'; ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-2 p-0">
          <?php require_once 'left-bar.php'; ?>
        </div>
        <div class="col-8 p-0">
          <?php require_once 'content_change.php'; ?>
        </div>
        <div class="col-2 p-0">
          <?php require_once 'advertisment.php'; ?>
        </div>
      </div>
    </div>
    <?php require_once 'footer.php'; ?>

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.scrollTo.min.js"></script>
  <script type="text/javascript" src="js/scripts.js"></script>

  </body>
</html>
