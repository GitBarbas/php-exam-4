<?php ob_start(); ?>

<h1>CAR'GO !</h1>

<p>
    Bienvenue chez Car'Go ! Concessionnaire et loueur de Vehicule !
</p>

<ul>
    <li><a href="<?= url('conducteur') ?>">Liste des conducteurs</li>
    <li><a href="<?= url('vehicule') ?>">Liste des vehicules</li>
    <li><a href="<?= url('association') ?>">Liste des vehicules et conducteurs</li>
</ul>


<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>
