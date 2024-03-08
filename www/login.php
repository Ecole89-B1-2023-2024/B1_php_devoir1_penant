<?php
require("./classes/User.php");
require("./modeles/user.php");
if($_GET!=[]){
    $erreur = [];
    $regex = '/\w{1,8}/';
    if (!isset($_GET['email']) || !preg_match('/[a-z]{1,8}+@[a-z]*(.)[a-z]{1,3}/', $_GET['email'])){
        $erreur['email']="email invalide";
    }
    if (!isset($_GET['password']) || !preg_match($regex, $_GET['password'])){
        $erreur['password']="mot de passe invalide";
    }
    if ($erreur!=[]){
        var_dump('erreur!');
    } else {
        //var_dump($user);
        //var_dump($erreur);
        $login = [$_GET['email'], $_GET['password']];
        loginUser($login);
        header('location: http://localhost/B1_php_devoir1_penant/www/index.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="register.php">Inscription</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <main>
        <form class="w-75 mx-auto my-5 border p-2" action="">
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" name="email" id="email">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" id="password">
                </div>
            </div>
            <button class="btn btn-secondary mt-3" type="submit">Valider</button>

        </form>
    </main>
</body>
</html>
