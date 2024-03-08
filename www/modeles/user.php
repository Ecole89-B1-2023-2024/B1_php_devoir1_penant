<?php
    function createUser($user){
        require("./inc/db.php");

        $hash=hash('sha256', $user->password);
        $sql="INSERT INTO `user` (`email`, `pseudo`, `nom`, `prenom`, `password`) VALUES(?, ?, ?, ?, ?);";
        $request=$pdo->prepare($sql);
        $request->execute(array($user->email, $user->pseudo, $user->nom, $user->prenom, $hash));
    }

    function loginUser($login){
        require("./inc/db.php");

        $hash=hash('sha256', $login[1]);
        $sql="SELECT * FROM `user` WHERE `email`= ? AND `password`= ?;";
        $request=$pdo->prepare($sql);
        $request->execute(array($login[0], $hash));
        session_start();
        $_SESSION['email'] = $login[0];
    }
?>