<?php 

if (isset($_POST['commit'])){
     
    $mes = $_POST['mes'];
    $dec = $_POST['dec'];
   
       if (empty($_POST['mes']) && empty($_POST['dec'])  ){
         $error = 'Veuillez saisir les entrées';
       } else{
             header("Location:res_dec.php?mes=$mes&dec=$dec");
             exit();
       }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Déchiffrement</title>
  <link rel="stylesheet" href="./bootstrap.min.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Chiffrement de César</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link " href="index.php">Chiffrement
              
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="dec.php">Dechiffrement  
                <span class="visually-hidden">(current)</span>
              </a>

            </li>
          </ul>
        </div>
      </div>
    </nav>

  </header>
  <section class=" pt-5 mt-5">
    <form action="" method="post" class=" h-100 w-100  ">
    <h1 class="text-center text-primary">Dechiffrement</h1>

      <div class="d-flex justify-content-evenly mt-5">
        <div class="mx-5">
          <label for="message">Message </label> <br>
          <input type="text" name="mes" id="message" class="form-control"> <br>
        </div>
        <div>
          <label for="dec">Décalage </label> <br>
          <input type="number" name="dec" id="dec" class="form-control"> <br> <br>
        </div>
      </div>
      <div class="d-flex justify-content-center">
        <input type="submit" name="commit" value="Valider" class="btn btn-primary "></button>
      

        </div>

        <div class="d-flex justify-content-center pt-3">

      
      <?php

      if (isset($error)) {
      ?>
        <p style="text-align :left; color : red;"> <?= $error ?> </p>
      <?php
      }
      ?>
  </div>
    </form> <br>

  </section>

 
</body>

</html>



