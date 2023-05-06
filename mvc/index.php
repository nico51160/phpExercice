<?php 
require('connexion/cnx.php');
require('model.php');

if(!empty($_GET['roiID'])) {
    $roiID = $_GET['roiID'];
} else {
    $roiID = 1;
}

$data = AfficherRoi($cnx, $roiID);

require('view.php');

