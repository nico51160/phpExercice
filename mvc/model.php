<?php
function AfficherRoi($cnx, $id) {
    $sql = 'SELECT * FROM roi WHERE roiID = :roiID';
    $req = $cnx->prepare($sql);

    $req->bindValue(':roiID',$id,PDO::PARAM_INT);

    $req->execute();

    $data = $req->fetch(PDO::FETCH_ASSOC);

    return $data;
}