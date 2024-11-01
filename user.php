<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link rel="stylesheet" href="/css/main.css">
</head>

<body>
  <div class="wrapper">
    <?php require_once "blocks/header.php" ?>

    <div class="feedback">
      <div class="container">
        <h1><b></b><?php echo $_COOKIE['login'] ?></b>, welcome to Proger!</h1>

        <form method="post" action="lib/add-game.php">
          <div class="inline">
            <div>
              <label>Image</label>
              <input type="text" name="image">
            </div>
            <div>
              <label>Amount followers</label>
              <input type="text" class="one-line" name="followers">
            </div>
          </div>

          <button type="submit">Add game</button>
        </form>
      </div>
    </div>

    <?php require_once "blocks/footer.php" ?>
  </div>
</body>

</html>