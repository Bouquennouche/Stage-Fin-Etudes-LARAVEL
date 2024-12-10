            <!-- Ajouter Modal Akhay Ayub hhh -->
            <div class="modal fade" id="ajouterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalSignTitle"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg-4" role="document">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-left">
                                    <h3 class="font-weight-bolder text-info text-gradient">Ajouter une entite</h3>
                                    <p class="mb-0"></p>
                                </div>
                                <div class="card-body pb-3">
                                    <form role="form text-left" method="POST" action="/storeEntite"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="col-md-12">
                                            <label>Nom d'entité</label>
                                            <input type="text" name="nom" id="nom" required
                                                class="form-control">
                                        </div>
                                        <br>
                                        <div class="col-md-12">
                                            <label>Adresse</label>
                                            <input type="text" name="adresse" id="adresse" required
                                                class="form-control">
                                        </div>
                                        <br>
                                        <div class="col-md-12">
                                            <label>Téléphone</label>
                                            <input type="text" name="telephone" id="telephone" required
                                                class="form-control">
                                        </div>

                                        <br>
                                        <input type="submit" value="Envoyer" class="btn bg-gradient-info">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
