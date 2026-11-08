<?php

/** @var \Framework\Support\LinkGenerator $link */
/** @var \App\Models\Cat $cat */
$statuses = ['Dostupná', 'Rezervovaná', 'Adoptovaná'];
?>
<main class="container adoption-list">
    <h1 class="page-title"><?= isset($cat->id) ? 'Úprava profilu mačky' : 'Pridanie mačky' ?></h1>
    <article class="cat-card">
        <div class="cat-info">
            <form method="post" action="<?= isset($cat->id) ? $link->url('cat.edit', ['id' => $cat->id]) : $link->url('cat.create') ?>">
                <?php if (isset($error)): ?>
                    <p role="alert"><?= e($error) ?></p>
                <?php endif; ?>
                <p>
                    <label for="name">Meno</label><br>
                    <input id="name" name="name" type="text" maxlength="100" required value="<?= e($cat->name) ?>">
                </p>
                <div class="age-fields">
                    <div class="age-field">
                        <label for="age">Vek</label>
                        <input id="age" name="age" type="number" min="0" max="2147483647" step="1" required value="<?= e($cat->age) ?>">
                    </div>
                    <div class="age-field">
                        <label for="ageUnit">Jednotka</label>
                        <select id="ageUnit" name="ageUnit" required>
                            <option value="mesiace"<?= $cat->ageUnit === 'mesiace' ? ' selected' : '' ?>>mesiace</option>
                            <option value="roky"<?= $cat->ageUnit === 'roky' || $cat->ageUnit === null ? ' selected' : '' ?>>roky</option>
                        </select>
                    </div>
                </div>
                <p>
                    <label for="personality">Povaha</label><br>
                    <input id="personality" name="personality" type="text" maxlength="255" required value="<?= e($cat->personality) ?>">
                </p>
                <p>
                    <label for="description">Opis</label><br>
                    <textarea id="description" name="description" rows="5" required><?= e($cat->description) ?></textarea>
                </p>
                <p>
                    <label for="adoptionStatus">Stav adopcie</label><br>
                    <select id="adoptionStatus" name="adoptionStatus" required>
                        <?php foreach ($statuses as $status): ?>
                            <option value="<?= e($status) ?>"<?= $cat->adoptionStatus === $status ? ' selected' : '' ?>><?= e($status) ?></option>
                        <?php endforeach; ?>
                    </select>
                </p>
                <p>
                    <button type="submit">Uložiť</button>
                    <a href="<?= $link->url('cat.index') ?>">Zrušiť</a>
                </p>
            </form>
        </div>
    </article>
</main>
