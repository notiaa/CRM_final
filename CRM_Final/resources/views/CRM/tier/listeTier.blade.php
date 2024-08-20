@include('CRM.header')
@include('CRM.sidebar')
   <!--**********************************
            Content body start
        ***********************************-->
        <style>
            .entete {

                color: #7571f9; /* Ajuster la couleur du texte si n�cessaire */
            }
            .card-small {
                height: 110px; /* Ajustez cette valeur selon vos besoins */
                padding: 10px;
            }

            .card-small .card-title {
                font-size: 1.3rem; /* Taille de la police du titre */
            }

            .card-small h2 {
                font-size: 2rem; /* Taille de la police du chiffre */
            }

            .card-small .display-5 {
                font-size: 2.2rem; /* Taille de l'ic�ne */
                opacity: 0.5; /* Garder l'opacit� comme avant */
            }


            .dropdown-menu {
                position: absolute;
                top: 100%;
                left: 0;
                transform: translate3d(0, 0, 0);
                will-change: transform;
                display: none;
            }

            .texte {
                color: black;
            }
            .content-body {
                background: linear-gradient(to bottom, #66ccff, #d4a373);
            }

        </style>

<style>
    .table th {
        color: #000000; /* Couleur noire intense */
        font-weight: bold; /* Optionnel : Rend le texte plus épais */
    }
    .table td {
        color: #828282; /* Couleur noire intense */
        font-weight: bold; /* Optionnel : Rend le texte plus épais */
    }
</style>
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                @include('CRM.headerCrm')
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1 card-small" style="border-radius: 28px 3px 28px 3px;">
                            <div class="card-body mb-5" style="margin-top: -10px;margin-left: 10px;">
                                <h3 class="card-title text-white" style="margin-bottom: 5px;">TIERS</h3>
                                <div class="d-inline-block mb-5">
                                    <h2 class="text-white">1</h2>
                                </div>
                                <span class="float-right display-5" style="margin-top: -10px;"><i class="fa fa-address-book" style="color: white;"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2 card-small" style="border-radius: 28px 3px 28px 3px;">
                            <div class="card-body mb-5" style="margin-top: -10px;margin-left: 10px;">
                                <h3 class="card-title text-white" style="margin-bottom: 5px;">CLIENTS</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">1</h2>
                                </div>
                                <span class="float-right display-5" style="margin-top: -10px;"><i class="fa fa-users" style="color: white;"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3 card-small" style="border-radius: 28px 3px 28px 3px;">
                            <div class="card-body mb-5" style="margin-top: -10px;margin-left: 10px;">
                                <h3 class="card-title text-white" style="margin-bottom: 5px;">FOURNISSEURS</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">1</h2>
                                </div>
                                <span class="float-right display-5" style="margin-top: -10px;"><i class="fa fa-industry" style="color: white;"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-5 card-small" style="border-radius: 28px 3px 28px 3px;">
                            <div class="card-body mb-5" style="margin-top: -10px;margin-left: 10px;">
                                <h3 class="card-title text-white" style="margin-bottom: 5px;">PROSPECTS</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">1</h2>
                                </div>
                                <span class="float-right display-5" style="margin-top: -10px;"><i class="fa fa-search" style="color: white;"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                @include('CRM.reglage')
                <div class="col-lg-12">
                    <div class="card" style="border-radius: 10px;width: 105%;margin-left: -31.5px;">
                        <div class="card-header text-center" style="display: flex; justify-content: space-between;">
                            <h3  class="entete">LISTES DES TIERS</h3>
                        <form action="{{ route('CRM.ajoutTier') }}" method="get">
                            <button class="btn btn-primary" style="margin-right: 15px;">Ajouter</button>
                        </form>
                        </div>
                        <div class="card-body" style="margin-top: -15px;">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="nom" placeholder="Nom">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="nomPays" placeholder="Nom du pays">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Etat</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Acteur</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="autre" placeholder="Autres">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group" id="date-range">
                                        <input type="date" class="form-control" name="start">
                                        <span class="input-group-addon b-0 text-white" style="width: 20px; text-align: center; justify-content: center; background-color: gray;">à</span>
                                        <input type="date" class="form-control" name="end">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-success">Filtrer</button>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="table-responsive" style="margin-top: -15px;">
                                <table class="table student-data-table m-t-20 table-hover">
                                    <thead>
                                        <tr>
                                            <th>Date Entree</th>
                                            <th>Nom Tier</th>
                                            <th>Nature</th>
                                            <th>Pays</th>
                                            <th>Tel</th>
                                            <th>Email Client</th>
                                            <th>Etat</th>
                                        </tr>
                                    </thead>
                                    <tbody style="cursor: pointer;">
                                        <tr onclick="window.location.href='{{ route('CRM.detailTier', 1) }}';" style="cursor: pointer;">
                                            <td>Class Test</td>
                                            <td>Mathematics</td>
                                            <td>4.00</td>
                                            <td>95.00</td>
                                            <td>100</td>
                                            <td>20/04/2017</td>
                                            <td>20/04/2017</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

@include('CRM.footer')
