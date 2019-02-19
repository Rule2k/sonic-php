<?php

class CoreController {

  protected $router;
  protected $dbdata;

  public function __construct($routerParam) {
        $this->dbdata = new DBData();
        $this->router = $routerParam;
    }

  protected function show($viewName, $viewVars = []) {

    $viewVars['baseURL'] = $_SERVER['BASE_URI'];
    include(__DIR__.'/../views/header.tpl.php');
    include(__DIR__.'/../views/'.$viewName.'.tpl.php');
    include(__DIR__.'/../views/footer.tpl.php');
  }
}