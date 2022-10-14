<?php
//  $BDD à mettre au début ou includes.BDD
$bdd = new PDO('mysql:host=localhost; dbname=epetitpas;', 'root', '');
//  on récupère toutes les valeurs dont on a besoin dans la BDD
$Users = $bdd->query("SELECT * FROM users");

// on vérifie la présence d'une valeur dans l'URL via method GET
if (isset($_GET['search']) AND !empty($_GET['search'])) {
    // on récupère la value dans le input search
    $recherche = htmlspecialchars($_GET['search']);
    // on compare et vérifie si la value dans le input search est présente dans la BDD
    $Users = $bdd->query("SELECT * FROM users WHERE name LIKE '%$recherche%' ORDER BY id DESC");
}

?>
<!-- ------------------------------------ Formulaire ------------------------------------ -->
<!-- Html pour faire apparaître la barre de recherche avec 2 inputs (1 search et 1 submit) en method "GET" et une action possible sur une autre page ou bien sur la même page-->
        <form action="" method="GET" class="d-flex gap-2" action="">
            <input type="search" class="form-control" name="search" placeholder="Search ..." id="" style="width: 300px">
            <input type="submit" class="form-control btn btn-warning" name="envoyer" value="Search" style="width: 100px">
        </form>


<!-- Section de l'affichage du résultat si positif ou négatif -->
        <section class=""> <!-- div dans laquelle placer le résultat de la recherche -->
            <?php
            if ($Users->rowCount() > 0) { //s'il y a des lignes de la BDD en réponse à la requête
                while ($user = $Users->fetch()) { // on parcourt toutes les lignes positives
                    $username = $user['name']; // et on stock pour chaque ligne le resultat dans une variable
                    $mail = $user['email'];
                    if (isset($_GET['search']) AND !empty($_GET['search'])) { // affichage du résultat seulement si on met une valeur dans le input 'search"
                        ?>
                            <p><?= $username ?></p>
                            <p><?= $mail ?></p>
                        <?php
                    }
                }
            }else{ //sinon affichage du résultat négatif
                ?>
                    <p>Aucun utilisiteur trouvé</p>
                <?php
            }
            ?>
        </section>