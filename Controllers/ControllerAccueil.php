<?php
require_once('Views/view.php');
class ControllerAccueil{
    
    private $_articleManager;
    private $_view;

    public function __construct($url){
        if(isset($url) && count( array($url) ) > 1)
        throw new Exception("Page introuvable");
    else 
    $this->articles();   
    }

    private function articles(){
        $this->_articleManager = new ArticleManager;
        $articles = $this->_articleManager->getArticles();

        $this->_view = new View('Accueil');
        $this->_view->generate(array('articles' => $articles)); 
    }
}