<?php
include_once('connect.php');

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $lastname=$_POST['lastname'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];

    $q="INSERT INTO `employer`(`name`, `lastname`, `age`, `email`, `phone`) VALUES ('$name','$lastname','$age','$email','$phone')";
    $r=mysqli_query($dbc,$q);
    header('Location: index.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Add emp</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
  <h1>ajouter un employée</h1>
  <form action="add_emp.php" method="post">
  <input type="text" class="form-control" placeholder="name" required name="name">
  <input type="text" class="form-control" placeholder="lastname" required name="lastname">
  <input type="number" class="form-control" placeholder="age" required name="age">
  <input type="email" class="form-control" placeholder="email" required name="email">
  <input type="number" class="form-control" placeholder="phone" required name="phone">
  <input type="submit" class="btn btn-primary btn-block" required name="submit" value="ajouter">
  </form>
  </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>