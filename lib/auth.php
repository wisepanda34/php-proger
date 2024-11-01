<?php
$login = trim(filter_var($_POST['login']), FILTER_SANITIZE_SPECIAL_CHARS);
$password = trim(filter_var($_POST['password']), FILTER_SANITIZE_SPECIAL_CHARS);

if (strlen($login) < 2) {
  echo "Login needs to be 4 or more characters";
  exit;
}
if (strlen($password) < 3) {
  echo "Password min 4 characters";
  exit;
}


//Passport
$salt = 'salt123@';
$password = md5($salt . $password);

//DB 
require "db.php";

//Auth user
$sql = 'SELECT id FROM users WHERE login = ? AND   password = ?';
$query = $pdo->prepare($sql);
$query->execute([$login, $password]);

if ($query->rowCount() == 0) echo "No that user!";
else {
  setcookie('login', $login, time() + 3600 * 24 * 30, "/");
  header('Location: /user.php');
}
