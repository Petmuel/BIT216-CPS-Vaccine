<?php
session_start();
try
{

  $dsn = 'mysql:dbname=cpsvaccine;host=localhost;charset=utf8';
  $db_user = "root";
  $db_password = "";

  $dbh = new PDO($dsn, $db_user, $db_password);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $vaccinationID = $_POST['ID'];
  $status = $_POST['status'];
  $remark = $_POST['remark'];

  $vaccinationID = htmlspecialchars($applicationID, ENT_QUOTES, 'UTF-8');
  $status = htmlspecialchars($status, ENT_QUOTES, 'UTF-8');
  $remark = htmlspecialchars($remark, ENT_QUOTES, 'UTF-8');

    $sql = 'UPDATE tb_vaccinations SET status=?, remark=? WHERE vaccinationID=?';
    $prepare = $dbh->prepare($sql);

    $prepare->bindValue(1, $status, PDO::PARAM_STR);
    $prepare->bindValue(2, $remark, PDO::PARAM_STR);
    $prepare->bindValue(3, $applicationID, PDO::PARAM_STR);
    $prepare->execute();

    $dbh = null;

    echo '<script>alert("You record successfully");window.location = "vaccinations.php";</script>';

}
catch (Exception $e)
{
  $error = $e->getMessage();
  print "{$error}";
  exit();
}
?>
