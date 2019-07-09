<?php ob_start(); ?>

<!-- Contenu de la vue -->
<a href="<?= url('association') ?>">
    < Retour à la liste des Associations</a> <form action="<?= url('association/add') ?>" method="post">

        <div class="form-group">
            <label for="associationMarqueForm">Marque du vehicule</label>
            <input type="text" name="Marque" id="associationMarqueForm" class="form-control">
        </div>

        <div class="form-group">
            <label for="associationConducteurForm">Nom du conducteur</label>
            <input type="text" name="conducteur" id="associationConducteurForm" class="form-control">
        </div>

        <button class="btn btn-success float-right">Ajouter l'association</button>
        </form>

        <?php $content = ob_get_clean() ?>
        <?php view('template', compact('content')); ?>