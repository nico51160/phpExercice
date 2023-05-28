<?php
class clientManager {
    private $cnx;

    public function __construct($cnx) {
        $this->setCnx($cnx);
        //$this->cnx = new PDO('mysql:host=localhost;dbname=alphorm;charset=utf8','root','');
    }

    public function CreateClient(client $client) {
        //Insert un nouvel objet client
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
    }

    public function DeleteClient(client $client) {
        //Supprime un objet Client
    }

    private function setCnx($cnx) {
        $this->cnx = $cnx;
    }

}