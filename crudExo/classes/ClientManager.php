<?php
include('../traits/Manager.php');
class ClientManager {
    use Manager;
    
    //**Creer Client */
    public function CreatClient(Client $_client) {
        $sql = 'INSERT INTO client
                (prenom, nom, email) VALUES
                (:prenom, :nom, :email)';
        $req = $this->cnx->prepare($sql);
        $req->execute(array(
            ':prenom' => $_client->getPrenom(),
            ':nom'    => $_client->getnom(),
            ':nom'    => $_client->getEmail()
        ));
    }
    //**Creer Client */


    //**Afficher Client */
    public function ReadClient(Client $_client) {
        $sql = 'SELECT * FROM client
                WHERE clientID = :clientID';
        $req = $this->cnx->prepare($sql);
        $req->execute(array(
            ':clientID' => $_client->getClientID()
        ));
        datas = $req->fetch(PDO::FETCH_ASSOC);

        $client = new Client();
        foreach($datas as $cle => $valeur) {
            $setter = 'set'.ucfirst($cle);
            $client->$setter($valeur);

        }
        
    }
    //**Afficher Client */

    //**Afficher la liste des Clients */
    public function ReadAllClient() {
        
    }
    //**Afficher la liste des Clients */

    //**Modifier les Clients */
    public function UpdateClient() {
        
    }
    //**Modifier les Clients */

    //**Supprimer Clients */
    public function Delete() {
        
    }
    //**Supprimer Clients */



}