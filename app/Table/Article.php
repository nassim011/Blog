<?php
/**
 * Created by PhpStorm.
 * User: NF11
 * Date: 26/02/2018
 * Time: 02:20
 */
namespace App\Table ;
use App\App;
class Article {
    private $id;
    private $contenu;
    private $titre;
    private $date;

    public static function getLast(){
        return App::getDB()->query("SELECT * FROM article",__CLASS__);
    }

    public function getURL(){
        return 'index.php?p=article&id='.$this->id;
    }
    public function getContenu(){
        return $this->contenu;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

}