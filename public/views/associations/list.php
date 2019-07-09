<?php ob_start(); ?>

<!-- Contenu de la vue -->
<a href="<?= url('') ?>">
    < Retour à la page d'accueil</a> <br>
        <a href="<?= url('association/add') ?>" class="btn btn-sm btn-primary">Ajouter une assocation</a>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Véhicule enregistré</th>
                    <th>Conducteur enregistré</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($registrations as $registration) : ?>
                    <tr>
                        <td><?= $association->getId(); ?></td>
                        <td><?= $association->getIdVehicule()->getMarque(); ?></td>
                        <td><?= $association->getIdConducteur()->getName(); ?></td>
                        <td><a href="<?= url('association/' . $association->getId() . '/edit') ?>" class="btn btn-warning btn-sm">Éditer</a></td>
                        <td><a href="<?= url('associaation/' . $association->getId() . '/delete') ?>" class="btn btn-danger btn-sm" onclick="return confirm('Voulez-vous supprimer cet élément ?)">Supprimer</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <?php $content = ob_get_clean() ?>
        <?php view('template', compact('content')); ?>