            <!-- Ajouter Modal Akhay Ayub hhh -->
            <div class="modal fade" id="ajouterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalSignTitle"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-left">
                                    <h3 class="font-weight-bolder text-info text-gradient">Ajouter un materiel</h3>
                                    <p class="mb-0"></p>
                                </div>
                                <div class="card-body pb-3">
                                    <form role="form text-left" method="POST" action="/store-material"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Num serie</label>
                                                <input type="text" name="numero_serie" id="nom" required
                                                    class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Modele</label>
                                                <input type="text" name="modele" id="prenom" required
                                                    class="form-control">
                                            </div>

                                        </div>
                                        <br>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>fabricants</label>
                                                <select name="fabricant_id" id="fabricantSelect" class="form-control" required>>
                                                    <option value="">Selectionner un fabricant</option>
                                                    @foreach ($fabricants as $item)
                                                        <option value="{{ $item->id }}">{{ $item->nom }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Types</label>
                                                <select name="type_id" id="typeSelect" class="form-control" required>
                                                    <option value="">Selectionner un type</option>
                                                </select>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Reference</label>
                                                <select name="reference_id" id="referenceSelect" class="form-control">
                                                    <option value="">Selectionner un reference</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Num Inventaire</label>
                                                <input type="text" name="numero_inventaire" id="num-inv" required
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Entite</label>
                                                <select name="entite_id" id="entiteSelect" class="form-control" required>
                                                    <option value="">Selectionner un entite</option>
                                                    @foreach ($entites as $item)
                                                        <option value="{{ $item->id }}">{{ $item->nom }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Utilisateur</label>
                                                <select name="utilisateur_id" id="utilisateurSelect" class="form-control" required>
                                                    <option value="">Selectionner un utilisateur</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <input type="text" value="{{ $id_label }}" name="label_id"
                                                id="" hidden>
                                        </div>
                                        <br>
                                        <input type="submit" value="Ajouter" class="btn bg-gradient-info">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
