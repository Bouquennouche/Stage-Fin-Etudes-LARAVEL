            <!-- Ajouter Modal Akhay Ayub hhh -->
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalSignTitle"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-left">
                                    <h3 class="font-weight-bolder text-info text-gradient">Editer un materiel</h3>
                                    <p class="mb-0"></p>
                                </div>
                                <div class="card-body pb-3">
                                    <form role="form text-left" method="POST" action="{{ route('update-material') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <input type="text" name="id" value="" id="editId" required
                                        class="form-control" hidden>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Num serie</label>
                                                <input type="text" name="numero_serie" id="editNumSerie" required
                                                    class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Modele</label>
                                                <input type="text" name="modele" id="editModele" required
                                                    class="form-control">
                                            </div>

                                        </div>
                                        <br>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>fabricants</label>
                                                <input type="text" name="fabricant" id="editFabricant" required
                                                    class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Types</label>
                                                <input type="text" name="type" id="editType" required
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Reference</label>
                                                <input type="text" name="reference" id="editReference" required
                                                    class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Num Inventaire</label>
                                                <input type="text" name="numero_inventaire" id="editNumInventaire" required
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Utilisateur</label>
                                                <input type="text" name="utilisateur" id="editUtilisateur" required
                                                class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <input type="text" value="{{ $id_label }}" name="label_id"
                                                id="" hidden>
                                        </div>
                                        <br>
                                        <input type="submit" value="Editer" class="btn bg-gradient-info">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
