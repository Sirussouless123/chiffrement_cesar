<?php

include_once('fonctions.php');
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
                <a class="navbar-brand" href="index.php">Chiffrement</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Chiffrement
                                <span class="visually-hidden">(Current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dec.php">Dechiffrement</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
    <section class=" pt-5 mt-5  col-8 mx-5 px-5">
       
            <table class="table table-hover  ">

                <thead>
                    <tr>
                        <th scope="col">Message original</th>
                        <th scope="col">Message déchiffré</th>
                    </tr>
                <tbody>
                    <tr class="table-dark">
                        <td><?= $_GET['mes'] ?></td>
                        <td><?= dechiffrement($_GET['mes'], $_GET['dec']) ?></td>
                    </tr>

                </tbody>
                </thead>

            </table>
       



    </section>


</body>

</html>

</html>