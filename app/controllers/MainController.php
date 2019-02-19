<?php

class MainController extends CoreController {

  public function home() {
    
    $character = $this->dbdata->getCharacter();
    $type = $this->dbdata->getType();

    $this->show('home', [
    'title' => 'Tous les personnages',
    'character' => $character,
    'type' => $type
    ]
  );

  }

  public function authors() {
    $this->show('authors', [
      'title' => 'Tous les auteurs',
    ]);
  }

}