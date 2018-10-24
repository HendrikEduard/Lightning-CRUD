<?php session_start();
require_once 'functions.php'; 
$name = $location = '';
$update = false;
$id = 0;
$mysqli = new mysqli('localhost', 'never_use_root', 'never_use_password', 'datbase_name') or die($mysqli_error($mysqli));
if(isset($_POST['save'])) {
  $name = in($_POST['name']);
  $location = in($_POST['location']);
  $mysqli->query("INSERT INTO data (name, location) VALUES('$name', '$location')") or die($mysqli->error);
  $_SESSION['message'] = "Record Added";
  $_SESSION['msg_type'] = "success";
  header("Location: index.php");
  exit();
}
if(isset($_GET['edit'])) {
  $id = intval($_GET['edit']);
  $update = true;
  $result = $mysqli->query("SELECT * FROM data WHERE id=$id") or die($mysqli->error);
    $row = $result->fetch_array();
    $name = $row['name'];
    $location = $row['location'];
}
if(isset($_POST['update'])) {
  $id = intval($_POST['id']);
  $name = in($_POST['name']);
  $location = in($_POST['location']);
  $mysqli->query("UPDATE data SET name='$name', location='$location' WHERE id=$id") or die($mysqli->error);
  $_SESSION['message'] = "Record updated";
  $_SESSION['msg_type'] = "info";
  header("Location: index.php");
  exit();
}
if(isset($_GET['delete'])) {
  $id = intval($_GET['delete']);
  $mysqli->query("UPDATE data SET deleted=1 WHERE id=$id") or die($mysqli->error);
  $_SESSION['message'] = "Record deleted";
  $_SESSION['msg_type'] = "danger";
  header("Location: index.php");
}