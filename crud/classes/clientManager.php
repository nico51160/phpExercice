<?php
class clientManager {
    private $cnx;

    public function __construct($cnx) {
        $this->setCnx($cnx);
        //$this->cnx = new PDO('mysql:host=localhost;dbname=alphorm;charset=utf8','root','');
    }

    public function CreateClient(client $client) {
        //Insert un nouvel objet client
        $sql = 'INSERT INTO client
                (nom, prenom, age) VALUES
                (:nom, :prenom, :age)';
        $req = $this->cnx->prepare($sql);
        $req->execute(array(
            ':nom'    => $client->getNom(),
            ':prenom' => $client->getPrenom(),
            ':age'    => $client->getAge()
        ));
    }

    public function ReadClient($id) {
        //Retourne l'enregistrement lié à un client
        $sql = 'SELECT * FROM client
                WHERE clientID = :id';
        $req = $this->cnx->prepare($sql);
        $req->execute(array(
            ':id' => $id
        ));
        $datas = $req->fetch(PDO::FETCH_ASSOC);

        $client = new client();
        $client->setNom($datas['nom']);
        $client->setPrenom($datas['prenom']);
        $client->setAge($datas['age']);

        return $client;
    }

    public function ReadAllClient() {
        //Retourne l'enregistrement lié à un client
        $sql = 'SELECT * FROM client';
        $req = $this->cnx->prepare($sql);
        $req->execute();

        while($datas = $req->fetch(PDO::FETCH_ASSOC)) {
            $client = new client();
            $client->setClientId($datas['clientID']);
            $client->setNom($datas['nom']);
            $client->setPrenom($datas['prenom']);
            $client->setAge($datas['age']);
            $clients[] = $client;
        }
        return $clients;
    }

    public function UpdateClient(client $client) {
        //Modifie un objet client
        $sql = 'UPDATE client SET 
                nom = :nom, prenom = :prenom, age = :age
                where clientID = :clientID';
        $req = $this->cnx->prepare($sql);
        $req->execute(array(
            ':clientID'=> $client->getClientID(),
            ':nom'     => $client->getNom(),
            ':prenom'  => $client->getPrenom(),
            ':age'     => $client->getAge()
        ));

    }

    public function deleteClient(client $client) {
        //Supprime un objet Client
        $sql = 'DELETE FROM client
        WHERE clientID = :clientID';
        $req = $this->cnx->prepare($sql);
        $req->execute(array(
            ':clientID'=> $client->getClientID(),
        ));
    }

    private function setCnx($cnx) {
        $this->cnx = $cnx;
    }

}