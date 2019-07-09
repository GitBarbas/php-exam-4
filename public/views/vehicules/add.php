<?php ob_start(); ?>

<!-- Contenu de la vue -->
<a href="<?= url('vehicule') ?>">
    < Retour à la liste des véhicules</a> <form action="<?= url('vehicule/add') ?>" method="post">

        <div class="form-group">
            <label for="vehiculeMarqueForm">Marque du véhicule</label>
            <input type="text" name="marque" id="vehiculeMarqueForm" class="form-control">
        </div>

        <div class="form-group">
            <label for="vehiculeConducteurForm">Nom</label>
            <input type="text" name="vehicule" id="vehiculeConducteurForm" class="form-control">
        </div>

        <button class="btn btn-success float-right">Ajouter le Vehicule</button>
        </form>

        <?php $content = ob_get_clean() ?>
        <?php view('template', compact('content')); ?>