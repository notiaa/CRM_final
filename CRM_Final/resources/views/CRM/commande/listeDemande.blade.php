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
                <div class="row" style="margin-bottom: -20px;margin-top: -10px;">
                    <div class="col-lg-3 col-sm-4">
                        <div class="card card-small" style="border-radius: 15px 3px 15px 3px; height: 50px; background: linear-gradient(to right, #3a7bd5, #3a6073);">
                            <div class="card-body d-flex align-items-center justify-content-between" style="height: 100%;">
                                <div>
                                    <h3 class="card-title text-white" style="margin-bottom: 5px; font-size: calc(0.1em + 1vw);">Nbr Commande</h3>
                                    <div class="d-inline-block">
                                        <h2 class="text-white" style="font-size: calc(0.5em + 1vw);">1</h2>
                                    </div>
                                </div>
                                <span class="display-5" style="font-size: calc(1em + 1vw);"><i class="fa fa-list" style="color: white;"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card card-small" style="border-radius: 15px 3px 15px 3px; height: 50px; background: linear-gradient(to right, #4568dc, #b06ab3);">
                            <div class="card-body d-flex align-items-center justify-content-between" style="height: 100%;">
                                <div>
                                    <h3 class="card-title text-white" style="margin-bottom: 5px; font-size: calc(0.1em + 1vw);">En Cour De Nego</h3>
                                    <div class="d-inline-block">
                                        <h2 class="text-white" style="font-size: calc(0.5em + 1vw);">1</h2>
                                    </div>
                                </div>
                                <span class="display-5" style="font-size: calc(1em + 1vw);"><i class="fa fa-handshake" style="color: white;"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card card-small" style="border-radius: 15px 3px 15px 3px; height: 50px; background: linear-gradient(to right, #43cea2, #185a9d);">
                            <div class="card-body d-flex align-items-center justify-content-between" style="height: 100%;">
                                <div>
                                    <h3 class="card-title text-white" style="margin-bottom: 5px; font-size: calc(0.1em + 1vw);">Commande Validée</h3>
                                    <div class="d-inline-block">
                                        <h2 class="text-white" style="font-size: calc(0.5em + 1vw);">1</h2>
                                    </div>
                                </div>
                                <span class="display-5" style="font-size: calc(1em + 1vw);"><i class="fa fa-check-circle" style="color: white;"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card card-small" style="border-radius: 15px 3px 15px 3px; height: 50px; background: linear-gradient(to right, #f3904f, #3b4371);">
                            <div class="card-body d-flex align-items-center justify-content-between" style="height: 100%;">
                                <div>
                                    <h3 class="card-title text-white" style="margin-bottom: 5px; font-size: calc(0.1em + 1vw);">Commande Annulée</h3>
                                    <div class="d-inline-block">
                                        <h2 class="text-white" style="font-size: calc(0.5em + 1vw);">1</h2>
                                    </div>
                                </div>
                                <span class="display-5" style="font-size: calc(1em + 1vw);"><i class="fa fa-times-circle" style="color: white;"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 0;">
                    <div class="col-lg-3 col-sm-4">
                        <div class="card card-small" style="border-radius: 15px 3px 15px 3px; height: 50px; background: linear-gradient(to right, #ff6e7f, #556770);">
                            <div class="card-body d-flex align-items-center justify-content-between" style="height: 100%;">
                                <div>
                                    <h3 class="card-title text-white" style="margin-bottom: 5px; font-size: calc(0.1em + 1vw);">PROTO</h3>
                                    <div class="d-inline-block">
                                        <h2 class="text-white" style="font-size: calc(0.5em + 1vw);">1</h2>
                                    </div>
                                </div>
                                <span class="display-5" style="font-size: calc(1em + 1vw);"><i class="fa fa-cogs" style="color: white;"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card card-small" style="border-radius: 15px 3px 15px 3px; height: 50px; background: linear-gradient(to right, #16a085, #f4d03f);">
                            <div class="card-body d-flex align-items-center justify-content-between" style="height: 100%;">
                                <div>
                                    <h3 class="card-title text-white" style="margin-bottom: 5px; font-size: calc(0.1em + 1vw);">TDS</h3>
                                    <div class="d-inline-block">
                                        <h2 class="text-white" style="font-size: calc(0.5em + 1vw);">1</h2>
                                    </div>
                                </div>
                                <span class="display-5" style="font-size: calc(1em + 1vw);"><i class="fa fa-file-alt" style="color: white;"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card card-small" style="border-radius: 15px 3px 15px 3px; height: 50px; background: linear-gradient(to right, #82a382, #000c40);">
                            <div class="card-body d-flex align-items-center justify-content-between" style="height: 100%;">
                                <div>
                                    <h3 class="card-title text-white" style="margin-bottom: 5px; font-size: calc(0.1em + 1vw);">PPS</h3>
                                    <div class="d-inline-block">
                                        <h2 class="text-white" style="font-size: calc(0.5em + 1vw);">1</h2>
                                    </div>
                                </div>
                                <span class="display-5" style="font-size: calc(1em + 1vw);"><i class="fa fa-box" style="color: white;"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card card-small" style="border-radius: 15px 3px 15px 3px; height: 50px; background: linear-gradient(to right, #667eea, #764ba2);">
                            <div class="card-body d-flex align-items-center justify-content-between" style="height: 100%;">
                                <div>
                                    <h3 class="card-title text-white" style="margin-bottom: 5px; font-size: calc(0.1em + 1vw);">PROD</h3>
                                    <div class="d-inline-block">
                                        <h2 class="text-white" style="font-size: calc(0.5em + 1vw);">1</h2>
                                    </div>
                                </div>
                                <span class="display-5" style="font-size: calc(1em + 1vw);"><i class="fa fa-industry" style="color: white;"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                @include('CRM.reglage')
                <div class="col-lg-12">
                    <div class="card" style="border-radius: 10px;width: 105%;margin-left: -31.5px;">
                        <div class="card-header text-center" style="display: flex; justify-content: space-between;">
                            <h3  class="entete">LISTES DES DEMANDES CLIENTS</h3>
                        <form action="{{ route('CRM.ajoutTier') }}" method="get">
                            <button class="btn btn-primary" style="margin-right: 15px;">Ajouter</button>
                        </form>
                        </div>
                        <div class="card-body" style="margin-top: -15px;">
                            <div class="row">
                                <div class="col-md-2 col-lg-2">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="theme" placeholder="Theme">
                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-2">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="modele" placeholder="Modele">
                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-2">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="client" placeholder="Client">
                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-2">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="saison" placeholder="Saison">
                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-2">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Stade</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-2">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Etat</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
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
                                <div class="col-md-2" style="margin-left: -110px;">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Voir +
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <label class="dropdown-item">
                                                <input type="checkbox" class="column-toggle" data-column="0" checked> Subject
                                            </label>
                                            <label class="dropdown-item">
                                                <input type="checkbox" class="column-toggle" data-column="1" checked> Grade Point
                                            </label>
                                            <label class="dropdown-item">
                                                <input type="checkbox" class="column-toggle" data-column="2" checked> Percent Form
                                            </label>
                                            <label class="dropdown-item">
                                                <input type="checkbox" class="column-toggle" data-column="3" checked> Percent Upto
                                            </label>
                                            <label class="dropdown-item">
                                                <input type="checkbox" class="column-toggle" data-column="4"> Date envoie
                                            </label>
                                            <label class="dropdown-item">
                                                <input type="checkbox" class="column-toggle" data-column="5"> Date
                                            </label>
                                            <label class="dropdown-item">
                                                <input type="checkbox" class="column-toggle" data-column="6"> test
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br>
                            <br>
                            <div class="table-responsive"  style="margin-top: -15px;">
                                <table class="table student-data-table m-t-20 table-hover">
                                    <thead>
                                        <tr>
                                            <th>Subject</th>
                                            <th>Grade Point</th>
                                            <th>Percent Form</th>
                                            <th>Percent Upto</th>
                                            <th>Date envoie</th>
                                            <th>Date</th>
                                            <th>test</th>
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
                                        <tr onclick="window.location.href='{{ route('CRM.detailTier', 2) }}';" style="cursor: pointer;">
                                            <td>Class Test</td>
                                            <td>English</td>
                                            <td>4.00</td>
                                            <td>95.00</td>
                                            <td>100</td>
                                            <td>20/04/2017</td>
                                            <td>20/04/2017</td>
                                        </tr>
                                        <tr onclick="window.location.href='{{ route('CRM.detailTier', 3) }}';" style="cursor: pointer;">
                                            <td>Class Test</td>
                                            <td>Bangla</td>
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
<script>
    document.querySelectorAll('.column-toggle').forEach(function(checkbox) {
    checkbox.addEventListener('change', function() {
    var column = this.getAttribute('data-column');
    var table = document.querySelector('.student-data-table');
    var rows = table.querySelectorAll('tr');

    rows.forEach(function(row) {
    row.querySelectorAll('td, th')[column].style.display = checkbox.checked ? '' : 'none';
        });
    });
});

// Masquer les colonnes qui ne sont pas cochées par défaut
document.querySelectorAll('.column-toggle').forEach(function(checkbox) {
    var column = checkbox.getAttribute('data-column');
    var table = document.querySelector('.student-data-table');
    var rows = table.querySelectorAll('tr');

    if (!checkbox.checked) {
        rows.forEach(function(row) {
            row.querySelectorAll('td, th')[column].style.display = 'none';
        });
    }
});
</script>

@include('CRM.footer')
