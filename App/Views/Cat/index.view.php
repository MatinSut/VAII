<?php

/** @var \Framework\Support\LinkGenerator $link */
/** @var \App\Models\Cat[] $cats */
?>
<main class="container adoption-list">
    <h1 class="page-title">Správa mačiek</h1>
    <p class="adoption-intro">Profily mačiek v databáze môžete pridať, upraviť alebo odstrániť.</p>
    <p><a class="adopt-link" href="<?= $link->url('cat.create') ?>">Pridať mačku</a></p>

    <?php if ($cats === []): ?>
        <p>Zatiaľ nie sú pridané žiadne mačky.</p>
    <?php endif; ?>

    <?php foreach ($cats as $cat): ?>
        <?php
        $catCardReverse = false;
        $showCatImage = false;
        $showManagementActions = true;
        require dirname(__DIR__, 3) . DIRECTORY_SEPARATOR . 'snippets' . DIRECTORY_SEPARATOR . 'post.snippet.view.php';
        ?>
    <?php endforeach; ?>
</main>
