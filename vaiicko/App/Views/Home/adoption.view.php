<?php

/** @var \Framework\Support\LinkGenerator $link */
?>

<main class="container adoption-list">
    <h1 class="page-title">Adopcia</h1>
    <p class="adoption-intro">Každá mačka si zaslúži bezpečný a láskavý domov. Zoznámte sa s našimi mačacími kamarátmi.</p>

    <article class="cat-card">
        <div class="image-placeholder cat-image" role="img" aria-label="Miesto pre fotografiu kocúra Huna"></div>
        <div class="cat-info">
            <h2>Huno</h2>
            <p>Pokojný a priateľský kocúr, ktorý má rád spoločnosť ľudí. Najradšej oddychuje v blízkosti svojich návštevníkov a užíva si nežné pohladenie.</p>
            <a class="adopt-link" href="<?= $link->url('home.index') ?>#contact">Adoptuj si ma</a>
        </div>
    </article>

    <article class="cat-card cat-card-reverse">
        <div class="image-placeholder cat-image" role="img" aria-label="Miesto pre fotografiu mačičky Shaily"></div>
        <div class="cat-info">
            <h2>Shaila</h2>
            <p>Hravá mačička plná energie, ktorá rada objavuje nové miesta. Svojou zvedavou povahou a veselými kúskami rozžiari deň celej rodine.</p>
            <a class="adopt-link" href="<?= $link->url('home.index') ?>#contact">Adoptuj si ma</a>
        </div>
    </article>

    <article class="cat-card">
        <div class="image-placeholder cat-image" role="img" aria-label="Miesto pre fotografiu kocúra Froda"></div>
        <div class="cat-info">
            <h2>Frodo</h2>
            <p>Zvedavý kocúr, ktorý si rýchlo získa každého návštevníka. Rád spoznáva ľudí, hrá sa a pozoruje všetko zaujímavé vo svojom okolí.</p>
            <a class="adopt-link" href="<?= $link->url('home.index') ?>#contact">Adoptuj si ma</a>
        </div>
    </article>
</main>
