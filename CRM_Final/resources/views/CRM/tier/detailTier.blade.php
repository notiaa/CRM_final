@include('CRM.header')
@include('CRM.sidebar')
<style>
    .entete {
        color: #7571f9;
        background-color: white;
    }
    .carte {
        color: white;
        background-color: white;
    }
    b{
        color: black;
    }
    th{
        color: black;
    }
    .texte {
        color: rgb(93, 93, 93);
    }
    .table {
        color: rgb(93, 93, 93);
    }
    .p-margin-left {
        margin-left: 100px;
    }
</style>
<div class="content-body">
    <div class="container-fluid mt-3">
        <!-- Include Header and Sidebar -->
        @include('CRM.headerCrm')
        <div style="margin-top: 10px;">
            @include('CRM.reglage')
        </div>

        <div class="card col-12 carte">
            <div class="card-header d-flex justify-content-between align-items-center entete">
                <h3 class="entete">DETAILS TIERS</h3>
            </div>

            <div class="card-body">
                <div class="card mb-2">
                    <div class="row g-0">
                        <div class="col-md-2 mt-2">
                            <center>
                                <!-- Static Image and Links -->
                                <img src="{{ asset('images/imageVide.jpeg') }}" class="img-fluid rounded-start mb-5" alt="Pas d'image" width="200px" height="200px">
                                <p class="texte ms-3" style="margin-left: 10px;"><b>Site web:</b> Pas de site web</p>
                                <p class="texte ms-3"><a href="{{ asset('assets/files/cahier_de_charge.pdf') }}">Cahier de charge</a></p>
                            </center>
                        </div>
                        <div class="col-md-5">
                            <div class="card-body">
                                <p class="texte p-margin-left"><b>Date entrée :</b> 20/04/2023</p>
                                <p class="texte p-margin-left"><b>Nom du tiers :</b> Entreprise XYZ</p>
                                <p class="texte p-margin-left"><b>Pays :</b> France</p>
                                <p class="texte p-margin-left"><b>Ville :</b> Paris</p>
                                <p class="texte p-margin-left"><b>Code postal :</b> 75000</p>
                                <p class="texte p-margin-left"><b>Adresse :</b> 123 Rue de la République</p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="card-body">
                                <p class="texte p-margin-left"><b>Tel :</b> +33 1 23 45 67 89</p>
                                <p class="texte p-margin-left"><b>Email :</b> contact@xyz.com</p>
                                <p class="texte p-margin-left"><b>Acteur :</b> Fournisseur</p>
                                <p class="texte p-margin-left"><b>Unité monétaire :</b> EUR</p>
                                <p class="texte p-margin-left"><b>Qualité :</b> Haute</p>
                                <p class="texte p-margin-left"><b>Etat :</b> Actif</p>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive" style="margin-left: 20px;">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Responsable</th>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Contact</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Senior</th>
                                    <td>Jean Dupont</td>
                                    <td>jean.dupont@xyz.com</td>
                                    <td>+33 1 23 45 67 89</td>
                                </tr>
                                <tr>
                                    <th>Junior</th>
                                    <td>Marie Curie</td>
                                    <td>marie.curie@xyz.com</td>
                                    <td>+33 1 23 45 67 90</td>
                                </tr>
                                <tr>
                                    <th>Assistant(e)</th>
                                    <td>Luc Martin</td>
                                    <td>luc.martin@xyz.com</td>
                                    <td>+33 1 23 45 67 91</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="table-responsive"  style="margin-left: 20px;">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Nom Interlocuteur</th>
                                    <th>Email Interlocuteur</th>
                                    <th>Contact Interlocuteur</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Paul Durand</td>
                                    <td>paul.durand@xyz.com</td>
                                    <td>+33 1 23 45 67 92</td>
                                </tr>
                                <tr>
                                    <td>Sarah Bernard</td>
                                    <td>sarah.bernard@xyz.com</td>
                                    <td>+33 1 23 45 67 93</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-lg-8 ml-auto text-right d-flex justify-content-end">
                    <form action="{{ route('CRM.accueil') }}" method="GET">
                        <button type="submit" class="btn btn-info mr-3">Voir liste</button>
                    </form>

                    <form action="{{ url('formModifTiers') }}" method="POST">
                        @csrf
                        <input type="hidden" name="idTiers" value="1">
                        <button type="submit" class="btn btn-warning mr-3">Modifier</button>
                    </form>

                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal">Supprimer</button>
                </div>
            </div>

            <!-- Modal de confirmation de suppression -->
            <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="confirmDeleteModalLabel">Confirmer la suppression</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="texte">Êtes-vous sûr de vouloir supprimer ce tiers ?</p>
                        </div>
                        <div class="modal-footer">
                        <form action="{{ url('deleteTiers') }}" method="POST">
                                @csrf
                                <input type="hidden" name="idTiers" value="1">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('CRM.footer')
