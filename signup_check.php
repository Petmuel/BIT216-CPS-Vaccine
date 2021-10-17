<?php

try
{

  $dsn = 'mysql:dbname=cpsvaccine;host=localhost;charset=utf8';
  $db_user = "root";
  $db_password = "";

  $dbh = new PDO($dsn, $db_user, $db_password);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $username = $_POST['username'];
  $password =  $_POST['password'];
  $email = $_POST['email'];
  $fullName = $_POST['fullName'];
  $ICPassport = $_POST['ICPassport'];


  $username = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');
  $password = htmlspecialchars($password, ENT_QUOTES, 'UTF-8');
  $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
  $fullName = htmlspecialchars($fullName, ENT_QUOTES, 'UTF-8');
  $ICPassport = htmlspecialchars($ICPassport, ENT_QUOTES, 'UTF-8');

  $sql_checkusername = 'SELECT username FROM tb_patients WHERE username=?';
  $prepare = $dbh->prepare($sql_checkusername);
  $prepare->bindValue(1, $username, PDO::PARAM_STR);
  $prepare->execute();

  $result = $prepare->fetch(PDO::FETCH_ASSOC);

  if($result==false)
  {
    $sql = 'INSERT INTO tb_volunteers(username, password, email, fullName, ICPassport) VALUES (?, ?, ?, ?, ? )';
    $prepare = $dbh->prepare($sql)
    $prepare->bindValue(1, $username, PDO::PARAM_STR);
    $prepare->bindValue(2, $password, PDO::PARAM_STR);
    $prepare->bindValue(3, $email, PDO::PARAM_STR);
    $prepare->bindValue(4, $fullName, PDO::PARAM_STR);
    $prepare->bindValue(5, $ICPassport, PDO::PARAM_STR);

    $prepare->execute();

    $dbh = null;

    session_start();
    $_SESSION['p_login'] = 1;
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['email'] = $email;
    $_SESSION['fulName'] = $fullName;
    $_SESSION['ICPassport'] = $ICPassport;
    echo '<script>alert("Sign Up successfully")';
    header('Location: index.php');
    exit();
  }
  else
  {
    echo '<script>alert("This Username is already used");window.location = "signupPatient.php";</script>';
  }
}
catch (Exception $e)
{
  $error = $e->getMessage();
  print "{$error}";
  exit();
}
?>
