<?php
class ArticleManager extends Model{
    public function getArticles(){
        $this->getBDD();
        return $this->getAll('articles', 'Article');
    }
}