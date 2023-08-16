<?php
include('cnx\cnx.php')
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserer un nouveau bien</title>
    <link rel="stylesheet" href="ergonomie\css\style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <article>
        <section>
            <form action="" method="post" enctype="multipart/form-data">
                <h1>Inserer un bien </h1>
<?php
    if(isset($_POST['envoyer'])) { //si le formulaire est validé debut

        if(empty($_POST['bien'])) { //si le champ bien est vide debut
            echo '<div class="error">Merci de nommer le bien</div>';
        } else {
            if(empty($_FILES['monImage']['tmp_name'])) { // si l image est vide
                echo '<div class="error">Merci d\'envoyer une image</div>';                
            } else {
                $dossierTempo  = $_FILES['monImage']['tmp_name'];
                $dossierSite   = 'ergonomie/images/'.$_FILES['monImage']['name'];

                $extension = strrchr($_FILES['monImage']['name'], '.');
                $autorise  = ['.jpg','.JPG'];

                if(in_array($extension, $autorise)) { // si l extention est aurotorisé
                    $deplacer = move_uploaded_file($dossierTempo, $dossierSite);


/******************on verifie si le bien existe dans la table */
                    $sql = 'SELECT bien FROM bien
                            WHERE bien = :bien';
                    $req = $cnx->prepare($sql);
                    $req->execute( array(
                        ':bien'  => $_POST['bien']
                    ));
                    $count = $req->rowCount();
                    if($count) {
                        echo '<div class="error">Ce bien est deja present</div>';
                    } else {
                        $sql    = 'INSERT INTO bien
                              (bien, image) VALUES (:bien, :image)';
                    $req    = $cnx->prepare($sql);
                    $retour = $req->execute( array(
                        ':bien'  => $_POST['bien'],
                        ':image' => $_FILES['monImage']['name']
                    ));
                    if($retour) {
                        echo '<div class="success">Le bien a été inséré</div>';
                    } else {
                        echo '<div class="error">Le bien n\'a pas pu etre inséré</div>';
                    }
                    }
                    

                } else {
                    echo '<div class="error">Cette extension n\'est pas autorisée</div>';   
                }
            }
        }

    } // si le formulaire est validé fin
?>
                <input type="text" name="bien" placeholder="Nom du bien">
                <p>Envoyer une image</p>
                <div id="download">
                <input type="file" name="monImage" id="fichier">
                <label for="fichier">
                    <div><i class="fa-solid fa-download"></i></div>
                </label>
                </div>
                
                <input type="submit" name="envoyer" value="Inserer">
            </form>
        </section>
    </article>
</body>
</html>