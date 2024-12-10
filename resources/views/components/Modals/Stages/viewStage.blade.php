<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalSignTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                        <h3 class="font-weight-bolder text-info text-gradient">Stage Details</h3>
                    </div>
                    <input type="text" name="id" value="" id="editId" required class="form-control"
                        hidden>
                    <div class="card-body pb-3">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="editDateDebut">Date de debut</label>
                                    <input type="date" class="form-control" id="editDateDebut1" readonly>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="editDateFin">Date de fin</label>
                                    <input type="date" class="form-control" id="editDateFin1" name="dateFin"
                                        readonly>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="editSujet">Sujet</label>
                                    <input type="text" class="form-control" id="editSujet1" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="editNote">Note</label>
                                    <input type="text" class="form-control" id="editNote1" readonly>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Encadrant</label>
                                    <input type="text" class="form-control" id="editEncadrant1" readonly>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="editDomaine1">Domaine</label>
                                    <input type="text" class="form-control" id="editDomaine1" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row mx-6">
                            <div class="col">
                                <div class="form-group">
                                    <label for="editNote">Etablissement</label>
                                    <input type="text" class="form-control" id="editEtablissement1" readonly>
                                </div>
                            </div>
                        </div>


                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group custom-card">
                                        <label>Convention</label>
                                        <a href="" id="conventionContainer"></a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group custom-card">
                                        <label>Rapport</label>
                                        <a href="" id="rapportContainer"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <style>
        .container {
            background-color: #f5f5f5;
            padding: 20px;
        }

        .custom-card {
            background-color: #ffffff;
            border-radius: 5px;
            padding: 15px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .custom-card label {
            font-weight: bold;
        }

        .custom-card a {
            color: #0000ff;
        }
    </style>
</div>

<script src="{{ asset('js/stageOp.js') }}"></script>
