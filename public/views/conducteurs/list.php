<?php ob_start(); ?>

<!-- Contenu de la vue -->
<a href="<?= url('') ?>">
    < Retour à la page d'accueil</a> <br>
        <a href="<?= url('conducteur/add') ?>" class="btn btn-sm btn-primary">Ajouter un conducteur</a>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Conducteur</th>
                    <th>Vehicule</th>
                    <th>Association</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($conducteurs as $conducteur) : ?>
                    <tr>
                        <td><?= $conducteur->getId(); ?></td>
                        <td><?= $conducteur->getNom(); ?></td>
                        <td><?= $conducteur->getPrenom(); ?></td>
                        <td>1</td>
                        <td><a href="<?= url('conducteur/' . $conducteur->getId() . '/edit') ?>" class="btn btn-warning btn-sm">Éditer</a></td>
                        <td><a href="<?= url('conducteur/' . $conducteur->getId() . '/delete') ?>" class="btn btn-danger btn-sm" onclick="return confirm('Voulez-vous supprimer cet élément ?)">Supprimer</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <?php $content = ob_get_clean() ?>
        <?php view('template', compact('content')); ?>