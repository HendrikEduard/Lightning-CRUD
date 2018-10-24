<?php require_once 'process.php'; 
$mysqli = new mysqli('localhost', 'never_use_root', 'never_use_password', 'your_database_name') or die($mysqli_error($mysqli));
$result = $mysqli->query("SELECT * FROM data where deleted = 0") or die($mysqli->error)?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lightning CRUD</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php if(isset($_SESSION['message'])): ?>
  <div class="text-center alert alert-<?=$_SESSION['msg_type']?>">
    <?php echo $_SESSION['message']; unset($_SESSION['message']);?>
  </div>
<?php endif; ?>
<div class="container">
  <div class="row">
    <div class="col-sm-3 mt-4">
      <div class="justify-content-center">
        <form action="" method="post">
          <input type="hidden" name="id" value="<?=$id?>">
          <div class="form-group">
            <label for="">Name</label> 
            <input type="text" name="name" required class="form-control" value="<?=out($name)?>" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="">Location</label> 
            <input type="text" name="location" required class="form-control" value="<?=out($location)?>" placeholder="Location">
          </div>
          <div class="form-group">
          <?php if($update == true): ?>
            <button type="submit" class="btn btn-info" name="update">Update</button>
          <?php else: ?>
            <button type="submit" class="btn btn-primary" name="save">Save</button>
          <?php endif; ?>
          </div>
        </form>
      </div>
    </div>
    <div class="col-sm-9">
        <div class="justify-content-center">
          <table class="table">
            <thead>
              <tr>
                <th>Name</th>
                <th>Location</th>
                <th>Action</th>
              </tr>
            </thead>
            <?php while($row = $result->fetch_assoc()): ?>
              <tr>
                <td><?=out($row['name'])?></td>
                <td><?=out($row['location'])?></td>
                <td>
                  <a href="index.php?edit=<?=out($row['id'])?>" class="btn btn-info">Edit</a>
                  <a href="process.php?delete=<?=out($row['id'])?>" class="btn btn-danger">Delete</a>
                </td>
              </tr>
            <?php endwhile; ?>    
          </table>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
