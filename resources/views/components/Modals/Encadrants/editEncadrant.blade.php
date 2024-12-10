            <!-- Ajouter Modal Akhay Ayub hhh -->
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalSignTitle"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg-4" role="document">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-left">
                                    <h3 class="font-weight-bolder text-info text-gradient">Ajouter un encadrant</h3>
                                    <p class="mb-0"></p>
                                </div>
                                <div class="card-body pb-3">
                                    <form role="form text-left" method="POST" action="{{ route('update-encadrant') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <input type="text" name="id" value="" id="editId" required
                                            class="form-control" hidden>
                                        <div class="col-md-12">
                                            <label>Nom</label>
                                            <input type="text" name="nomEncadrant" id="editNom" required
                                                class="form-control">
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <label>Prenom</label>
                                            <input type="text" name="prenomEncadrant" id="editPrenom" required
                                                class="form-control">
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <label>Poste</label>
                                            <input type="text" name="poste" id="editPoste" required
                                                class="form-control">
                                        </div>
                                        <br>
                                        <input type="submit" value="Modifier" class="btn bg-gradient-info">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
