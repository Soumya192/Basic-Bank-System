<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="creteuser.css">
<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/createuser.css">

</head>
<body style="background-color : #f18973;">
<div>
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
              echo "<script>
                               window.location='transfermoney.php';
                     </script>";
                     
                    
    }
  }
?>

<?php
  include 'navbar.php';
?>
<div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4 mt-5">
        <hr>
        <h2 class="text-center bg-dark text-white" style="color : black;">Create a User</h2>
        <hr>

  <div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item">
          <form class="app-form" method="post">
            <div class="app-form-group">
<br>
              <input class="form-control " placeholder="ENTER NAME" type="text" name="name" required>
            </div>
            <div class="app-form-group">
<br>
              <input class="form-control" placeholder="ENTER EMAIL" type="email" name="email" required>
            </div>
            <div class="app-form-group">
<br>
              <input class="form-control" placeholder="ENTER BALANCE" type="number" name="balance" required>
            </div>
            <br>
            <div class="app-form-group button">
              <input class="form-button btn btn-dark btn-sm" type="submit" value="CREATE" name="submit"></input>
              <input class="form-button btn btn-dark btn-sm" type="reset" value="RESET" name="reset"></input>
</div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>