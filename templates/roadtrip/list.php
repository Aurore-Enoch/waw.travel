<h1><?= $data['seo']['title'] ?></h1>
<?php foreach ($data['roadtrips'] as $roadtrip): ?>
    <div class="container">
        <h2> <?=$roadtrip->getTitle() ?></h2>
        <a href="?path=/<?= $roadtrip->getId()?>">Voir le roadtrip</a>
    </div>
<?php endforeach; ?>