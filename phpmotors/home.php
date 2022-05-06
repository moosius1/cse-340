<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home | PHP Motors</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/styles-large.css">
  </head>
  <body>


<!---------------Header--------------------->      
      <header>
            <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/header.php'; ?>
      </header>

<!---------------Main--------------------->
      <main>
      <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/home-main.php'; ?>
      </main>
      <hr>
<!---------------Footer--------------------->
      <footer>
      <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
      </footer>
    

    
  </body>
</html>