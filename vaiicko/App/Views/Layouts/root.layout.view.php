<?php

/** @var string $contentHTML */
/** @var \Framework\Support\LinkGenerator $link */
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= ($_GET['a'] ?? 'index') === 'adoption' ? 'Zoznámte sa s mačkami z Mačkafé, ktoré hľadajú nový domov.' : 'Mačkafé – vychutnajte si kávu v milej mačacej spoločnosti.' ?>">
    <title>Mačkafé</title>
    <link rel="stylesheet" href="<?= $link->asset('css/styl.css') ?>">
</head>
<body>
<header class="site-header">
    <div class="container header-content">
        <a class="brand" href="<?= $link->url('home.index') ?>">Mačkafé</a>
        <nav aria-label="Hlavná navigácia">
            <ul>
                <li><a href="<?= $link->url('home.index') ?>"<?= ($_GET['a'] ?? 'index') === 'index' ? ' aria-current="page"' : '' ?>>Domov</a></li>
                <li><a href="<?= $link->url('home.index') ?>#about">O kaviarni</a></li>
                <li><a href="<?= $link->url('home.index') ?>#gallery">Galéria</a></li>
                <li><a href="<?= $link->url('home.adoption') ?>"<?= ($_GET['a'] ?? '') === 'adoption' ? ' aria-current="page"' : '' ?>>Adopcie</a></li>
                <li><a href="<?= $link->url('home.index') ?>#contact">Kontakt</a></li>
                <li><a href="<?= $link->url('auth.login') ?>">Prihlásiť</a></li>
                <li><a class="nav-button" href="<?= $link->url('auth.login') ?>">Registrácia</a></li>
            </ul>
        </nav>
    </div>
</header>
<?= $contentHTML ?>
<footer class="site-footer" id="contact">
    <div class="container footer-content">
        <a class="footer-brand" href="<?= $link->url('home.index') ?>">Mačkafé</a>
        <div class="opening-hours">
            <strong>Otváracie hodiny:</strong>
            <p>Pon – Pia: 8:00 – 20:00</p>
            <p>So – Ne: 9:00 – 19:00</p>
        </div>
    </div>
</footer>
</body>
</html>
