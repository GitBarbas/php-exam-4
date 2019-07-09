<?php

class AssociationsController
{
    // Route: GET associations
    public function list()
    {

        $associations = Association::findAll();
        view('associatons.list', compact('associations'));
    }

    // Route: GET associations/add
    public function add()
    {

        $conducteurs = Conducteur::findAll();
        $vehicules = Vehicule::findAll();
        view('associations.add', compact('conducteurs', 'vehicules'));
    }

    // Route: POST ations/add
    public function save()
    {
        $association = new Association;
        $association->setIdVehicule($_POST['id_vehicule']);
        $association->setIdConducteur($_POST['id_conducteur']);
        $association->save();

        redirectTo('associations');
    }

    // Route: GET associations/$id/edit
    public function edit($id)
    {
        $conducteurs = Conducteur::findAll();
        $vehicules = Vehicule::findAll();
        $association = Association::findOne($id);
        view('associations.edit', compact('association', 'conducteurs', 'vehicules'));
    }

    // Route: POST associations/$id/edit
    public function update($id)
    {
        $association = Association::findOne($id);
        $association->setIdVehicule($_POST['id_vehicule']);
        $association->setIdConducteur($_POST['id_conducteur']);
        $association->update();

        redirectTo('associations');
    }

    // Route: GET assiciations/$id/delete
    public function delete($id)
    {
        $conducteur = Association::findOne($id);
        $conducteur->delete();

        redirectTo('associations');
    }

    // Route: GET associations/$id
    public function show($id)
    {
        view('associations.show');
    }
}
