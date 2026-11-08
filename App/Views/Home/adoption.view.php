<?php

/** @var \Framework\Support\LinkGenerator $link */
/** @var \App\Models\Cat[] $cats */
?>

<main class="container adoption-list">
    <h1 class="page-title">Adopcia</h1>
    <p class="adoption-intro">Každá mačka si zaslúži bezpečný a láskavý domov. Zoznámte sa s našimi mačacími kamarátmi.</p>

    <?php if ($cats === []): ?>
        <p>Zatiaľ tu nie sú zverejnené žiadne mačky.</p>
    <?php endif; ?>

    <?php foreach ($cats as $index => $cat): ?>
        <?php
        $catCardReverse = $index % 2 === 1;
        $showCatImage = true;
        $showManagementActions = false;
        require dirname(__DIR__, 3) . DIRECTORY_SEPARATOR . 'snippets' . DIRECTORY_SEPARATOR . 'post.snippet.view.php';
        ?>
    <?php endforeach; ?>
</main>
