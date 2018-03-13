<h1>home</h1>
<ul class="list-group">
    <?php foreach (\App\Table\Article::getLast() as $value):?>
        <li class="list-group-item">
        <a href="<?= $value->getURL(); ?>"><?= $value->getTitre(); ?></a>
        </li>
    <p><?= $value->getContenu(); ?></p>
    <?php endforeach;?>
</ul>
