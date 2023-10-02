<?php
session_start();
include("config.php");
if ($_SESSION['status'] != "login") {
    header("location: loginindex.php");
    exit();
}
$link_tp = mysqli_query($mysqli, "SELECT * FROM data WHERE id=1");

$row = mysqli_fetch_array($link_tp);
$url = $row['link_tp'];

if (isset($_POST['update'])) {
    $tp = $_POST['linktp'];
    $result = mysqli_query($mysqli, "UPDATE data SET link_tp='$tp' WHERE id=1");
    
    header("Location: adminindex.php");
    exit();
}
if (isset($_POST['delete'])) {

    $result = mysqli_query($mysqli,"DELETE link_tp FROM data WHERE id =1");
    
    header("Location: adminindex.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>ADMIN PAGE</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="style-login.css">
<style>
.button {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #ba0000;
}

.button2:hover {
  background-color: #ba0000;
;
  color: white;
}

</style>
</head>
<body>
<?php

?>
<!-- partial:index.partial.html -->
<div id="login-form-wrap">
  <h2>Link Tugas Pendahuluan</h2>
  <form name="edit" name="delete" action="adminindex.php" method="post">
    <p>
      <input type="text" id="linktp" name="linktp" placeholder="Link Tugas Pendahuluan" value="<?php echo isset($url) ? $url : ''; ?>">
      <i class=""><span></span><span></span></i>
    </p>
    <!-- Add a hidden input field for ID -->
    <input type="hidden" name="record_id" value="1">
    <p>
      <button class="button button1" name="update" type="submit">UPDATE</button>
    </p>
  </form>
  <div id="create-account-wrap">
  
  </div><!--create-account-wrap-->
</div><!--login-form-wrap-->
<!-- partial -->
  
</body>
</html>
