<?php
$image = trim($_POST['image']);
$followers = trim($_POST['followers']);

if (strlen($image) < 3) {
  echo "Image error";
  exit;
}
if (strlen($followers) < 1) {
  echo "Followers error";
  exit;
}

//DB 
require "db.php";
//INSERT
$sql = 'INSERT INTO trending(image, followers) VALUES(?,?)';
$query = $pdo->prepare($sql);
$query->execute([$image, $followers]);

header('Location: /trending.php');
