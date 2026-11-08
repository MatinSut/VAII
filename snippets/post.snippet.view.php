<?php

/** @var \App\Models\Cat $cat */
/** @var \Framework\Support\LinkGenerator $link */
/** @var bool $catCardReverse */
/** @var bool $showCatImage */
/** @var bool $showManagementActions */
?>
<article class="cat-card<?= $catCardReverse ? ' cat-card-reverse' : '' ?>">
    <?php if ($showCatImage): ?>
        <div class="image-placeholder cat-image" role="img" aria-label="Miesto pre fotografiu mačky"></div>
    <?php endif; ?>
    <div class="cat-info">
        <h2><?= e($cat->name) ?></h2>
        <p><strong>Vek:</strong> <?= e($cat->age) ?> <?= e($cat->ageUnit) ?></p>
        <p><strong>Povaha:</strong> <?= e($cat->personality) ?></p>
        <p><?= nl2br(e($cat->description)) ?></p>
        <?php if ($showManagementActions): ?>
            <p><strong>Stav adopcie:</strong> <?= e($cat->adoptionStatus) ?></p>
            <div class="cat-actions">
                <a class="adopt-link" href="<?= $link->url('cat.edit', ['id' => $cat->id]) ?>">Upraviť</a>
                <form method="post" action="<?= $link->url('cat.delete') ?>">
                    <input type="hidden" name="id" value="<?= e($cat->id) ?>">
                    <button class="adopt-link" type="submit">Odstrániť</button>
                </form>
            </div>
        <?php elseif ($cat->adoptionStatus === 'Dostupná'): ?>
            <a class="adopt-link" href="<?= $link->url('home.index') ?>#contact">Adoptuj si ma</a>
        <?php else: ?>
            <p><strong>Stav adopcie:</strong> <?= e($cat->adoptionStatus) ?></p>
        <?php endif; ?>
    </div>
</article>
