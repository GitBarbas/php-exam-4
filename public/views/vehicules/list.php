<?php ob_start(); ?>

<!-- Contenu de la vue -->
<a href="<?= url('') ?>">
    < Retour à la page d'accueil</a> <br>
        <a href="<?= url('vehicule/add') ?>" class="btn btn-sm btn-primary">Ajouter un vehicule</a>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Vehicule</th>
                    <th>Conducteur</th>
                    <th>Association</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($vehicules as $vehicule) : ?>
                    <tr>
                        <td><?= $vehicule->getId(); ?></td>
                        <td><?= $vehicule->getMarque(); ?></td>
                        <td><?= $vehicule->getModele(); ?></td>
                        <td><?= $vehicule->getCouleur(); ?></td>
                        <td><?= $vehicule->getImmatriculation(); ?></td>

                        <td>1</td>
                        <td><a href="<?= url('vehicule/' . $vehicule->getId() . '/edit') ?>" class="btn btn-warning btn-sm">Éditer</a></td>
                        <td><a href="<?= url('vehicule/' . $vehicule->getId() . '/delete') ?>" class="btn btn-danger btn-sm" onclick="return confirm('Voulez-vous supprimer cet élément ?)">Supprimer</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <?php $content = ob_get_clean() ?>
        <?php view('template', compact('content')); ?>