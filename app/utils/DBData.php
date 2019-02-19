<?php

class DBData {

  private $dbh;

  public function __construct() {

    // Récupération des données du fichier de config
    //   la fonction parse_ini_file parse le fichier et retourne un array associatif

    $configData = parse_ini_file(__DIR__.'/../config.conf');
    
    try {
        $this->dbh = new PDO(
            "mysql:host={$configData['DB_HOST']};dbname={$configData['DB_NAME']};charset=utf8",
            $configData['DB_USERNAME'],
            $configData['DB_PASSWORD'],
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING) // Affiche les erreurs SQL à l'écran
        );
    }
    catch(\Exception $exception) {
        echo 'Erreur de connexion...<br>';
        echo $exception->getMessage().'<br>';
        echo '<pre>';
        echo $exception->getTraceAsString();
        echo '</pre>';
        exit;
    }
}

// fonction permettant de récupérer la liste des personnages avec toutes les infos
public function getCharacter() {
  $sql = 'SELECT * FROM `character` ORDER BY `name` ASC';
  $statement = $this->dbh->query($sql);
  $characters = $statement->fetchAll(PDO::FETCH_CLASS, 'Character');
  return $characters;
}

public function getType() {
  $sql = 'SELECT * FROM `type`';
  $statement = $this->dbh->query($sql);
  $type = $statement->fetchAll(PDO::FETCH_CLASS, 'Type');
  return $type;
}
}