<?php
$post = $pdo->prepare("SELECT * FROM article WHERE id = ?",[$_GET['id']],"App\Table\Article",true);
?>
<h1><?=$post->getTitre();?></h1>
<p><?=$post->getContenu();?></p>