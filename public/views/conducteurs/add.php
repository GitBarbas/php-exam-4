<?php ob_start(); ?>

<!-- Contenu de la vue -->
<a href="<?= url('conducteur') ?>">
    < Retour à la liste des conducteur</a> <form action="<?= url('conducteur/add') ?>" method="post">

        <div class="form-group">
            <label for="conducteurNomForm">Nom du conducteur</label>
            <input type="text" name="nom" id="conducteurNomForm" class="form-control">
        </div>

        <div class="form-group">
            <label for="conducteurVehiculeForm">Nom du vehicule</label>
            <input type="text" name="conducteur" id="conducteurVehiculeForm" class="form-control">
        </div>

        <button class="btn btn-success float-right">Ajouter le conducteur</button>
        </form>

        <?php $content = ob_get_clean() ?>
        <?php view('template', compact('content')); ?>