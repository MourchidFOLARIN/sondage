<?php
class Model
{
    private $database;
    public function __construct()
    {
        $this->database = new PDO('mysql:host=localhost; dbname=afrika; charset = utf8', 'root', '');
    }

    public function create()
    {
        $query = "INSERT INTO individus VALUES";
    }
    public function createlogin($nameEnq, $nomQuest, $prenomQues)
    {   
        $query = "INSERT INTO enqueteur ( nomEnqt , nomQuested , prenomQuested  ) VALUES (:nomEnqt , :nomQuested , :prenomQuested )";
        $stmt = $this->database->prepare($query);
        return $stmt->execute([
            'nomEnqt' => $nameEnq,
            'nomQuested' => $nomQuest,
            'prenomQuested' => $prenomQues
        ]);
    }
    public function store($age, $sexe, $secteur, $ville, $reg, $epag, $moy, $mois, $pense, $vivre, $suffis, $known, $eft, $interet, $invp,  $freq, $rassure, $expl, $freins, $sugg,$idEnq)
    {
        $query = "INSERT INTO reponses_formulaire ( 
        age, sexe, secteurActivite, payVil, regularite, epagne, moyen_epargne, 
        epagneParMois, avenirFinancier, vivreRetraire, AvenirEpagne, 
        KnownInvest, eft, interet, invpsomme, frequence, rassure, 
        explication, freins, suggestion ,enqueteur_id
    ) VALUES (
        :age, :sexe, :secteur, :ville, :reg, :epag, :moy, :mois, 
        :pense, :vivre, :suffis, :known, :eft, :interet, :invp, 
        :freq, :rassure, :expl, :freins, :sugg ,:enqueteur_id
    )";
        $stmt = $this->database->prepare($query);
        return $stmt->execute([
            'age' => $age,
            'sexe' => $sexe,
            'secteur' => $secteur,
            'ville' => $ville,
            'reg' => $reg,
            'epag' => $epag,
            'moy' => $moy,
            'mois' => $mois,
            'pense' => $pense,
            'vivre' => $vivre,
            'suffis' => $suffis,
            'known' => $known,
            'eft' => $eft,
            'interet' => $interet,
            'invp' => $invp,
            'freq' => $freq,
            'rassure' => $rassure,
            'expl' => $expl,
            'freins' => $freins,
            'sugg' => $sugg,
            'enqueteur_id' => $idEnq
        ]);
    }
    public function  enqueteInfo($name)
    {
        $query = "SELECT * FROM enqueteur where nomEnqt = :nameEnqt";
        $stmt = $this->database->prepare($query);
        $stmt->execute(
            [
                'nameEnqt' => $name
            ]
        );
        $resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultat;
    }
}
