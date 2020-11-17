<?php
include_once('connect.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <title>CRUD</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

  <div class="container">
    <h1>list des employées</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet delectus architecto adipisci veniam modi debitis molestias, accusantium reprehenderit dicta rerum atque nobis ipsam veritatis porro. Quaerat corporis voluptatum natus ipsa.</p>
    
    <a href="add_emp.php">
    <button class="btn btn-primary btn-block">Ajouter un emplyée</button>
    </a>
    
    <hr>

    <table class="table">
    <thead>
    <tr>
    <th>id</th>
    <th>nom</th>
    <th>prénom</th>
    <th>age</th>
    <th>adr email</th>
    <th>num de téléphone</th>
    <th>modifier</th>
    <th>supptrimer</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $q="SELECT * FROM `employer`";
    $r=mysqli_query($dbc,$q);
    //$row=mysqli_fetch_assoc($r);

    while($row=mysqli_fetch_assoc($r)){
    ?>
    <!-- begin -->
    <tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['name'] ?></td>
    <td><?= $row['lastname'] ?></td>
    <td><?= $row['age'] ?></td>
    <td><?= $row['email'] ?></td>
    <td><?= $row['phone'] ?></td>
    <td>
      <a href="update_emp.php">
        <button class="btn btn-success btn-block">Modifier</button>
      </a>
    </td>
    <td>
      <a href="delete_emp.php">
        <button class="btn btn-danger btn-block">Supprimer</button>
      </a>
    </td>
    </tr>
    <!-- end -->
    <?php } ?>
    </tbody>
    </table>
  </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jquery-3.3.1.slim.min.js"></script>
    <script src="popper.min.js"></script>
    <script src="bootstrap.min.js"></script>
  </body>
</html>