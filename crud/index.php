<?php
include('_cnx.php');
spl_autoload_register(function($class) {
    include('classes/'.$class.'.php');

});
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<body>
    <?php
    
    $_POST['clientID'] = 3;

    $supprimerClient = new client();
    $supprimerClient->setClientID($_POST['clientID']);

    $manager = new clientManager($cnx);
    $manager->DeleteClient($supprimerClient);








/***********update */
 //   $_POST['nom'] ='Durey';
 //   $_POST['prenom'] ='Julie';
 //   $_POST['age'] = 150;
 //   $_POST['clientID'] = 3;

  //  $modifClient = new client();
   // $modifClient->setNom($_POST['nom']);
 //   $modifClient->setClientID($_POST['clientID']);
//    $modifClient->setPrenom($_POST['prenom']);
  //  $modifClient->setAge($_POST['age']);




  //  $manager = new clientManager($cnx);
  //  $manager->updateClient($modifClient);


/********** create*/

   // $_POST['nom'] ='Durey';
   // $_POST['prenom'] ='Julie';
   // $_POST['age'] = 150;


    //$nveauClient = new client();
   // $nveauClient->setNom($_POST['nom']);
   // $nveauClient->setPrenom($_POST['prenom']);
   // $nveauClient->setAge($_POST['age']);




       // $manager = new clientManager($cnx);
      //  $manager->CreateClient($nveauClient);


/********* read*/



       // $client = $manager->ReadClient(1);
       // echo $client->getNom();
        //echo '<br>';
       // echo $client->getPrenom();
       // echo '<br>';
       // echo $client->getAge(); 
       // echo '<br>';
       // echo $client->getClientId(); 
       // echo '<br>';


/***** read all*/


       // $clients = $manager->ReadAllClient();
      //  foreach($clients as $client) {
        //    echo $client->getNom();
        //    echo '<br>';
        //    echo $client->getPrenom();
        //    echo '<br>';
         //   echo $client->getAge();
          //  echo '<br>';
          //  echo '<br>';

       // }


    ?>
    
</body>
</html>