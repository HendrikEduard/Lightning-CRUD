
<?php if(isset($_SESSION['message'])): ?>
  <div class="alert alert-<?=$_SESSION['msg_type']?>">
    <?php echo $_SESSION['message']; 
          unset($_SESSION['message']);?>
  </div>
<?php endif; ?>

<?php

$_SESSION['message'] = "Record Added";
$_SESSION['msg_type'] = "success";
header("Location: index.php");

$_SESSION['message'] = "Record updated";
$_SESSION['msg_type'] = "info";
header("Location: index.php");

$_SESSION['message'] = "Record deleted";
$_SESSION['msg_type'] = "danger";
header("Location: index.php");



