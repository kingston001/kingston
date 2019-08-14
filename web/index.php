,;<?php
//inclusion de fichier Article
require_once '../src/App/Entity/Article.php';
use App\Entity\Article;
//creation d"un objet :instaciation
//instance=objet

$article_1 = new Article();
$article_2 = new Article();
$article_3 = new Article();
$article_1 -> setReference('papa');
var_dump($article_1);



?>
