<?php
class ControllerAccueil{
    private $article_manager;

    public function __construct($url){  // selon les parametres li dayzin fl url imken ndirou switch
        $this->article_manager = new ArticleManager();
        $articles = $this->article_manager->getArticles();
        require_once("views/viewAcceuil.php");
    }
}