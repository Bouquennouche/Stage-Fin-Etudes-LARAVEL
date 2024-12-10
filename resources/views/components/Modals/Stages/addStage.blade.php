            <!-- Ajouter Modal Akhay Ayub hhh -->
            <div class="modal fade" id="ajouterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalSignTitle"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-left">
                                    <h3 class="font-weight-bolder text-info text-gradient">Ajouter un stage</h3>
                                    <p class="mb-0"></p>
                                </div>
                                <div class="card-body pb-3">
                                    <form role="form text-left" method="POST" action="/storeStage{{ $stagiaire->id }}/"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Date début</label>
                                                <input type="date" name="dateDebut" id="dateDebut" required
                                                    class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Date fin</label>
                                                <input type="date" name="dateFin" id="dateFin" required
                                                    class="form-control">
                                            </div>

                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Sujet</label>
                                                <input type="text" name="sujet" id="sujet" required
                                                    class="form-control">
                                            </div>

                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <select name="nomEncadrant" id="nomEncadrant" required
                                                    class="form-control">
                                                    <option value="" disabled selected hidden>Encadrant</option>

                                                    @foreach ($encadrant as $item)
                                                        <option value="{{ $item->nomEncadrant }}">
                                                            {{ $item->nomEncadrant }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <select name="nomDomaine" id="nomDomaine" required class="form-control">
                                                    <option value="" disabled selected hidden>Domaine</option>
                                                    @foreach ($domaine as $item)
                                                        <option value="{{ $item->nomDomaine }}">{{ $item->nomDomaine }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <select name="nomEtablissement" id="nomEtablissement" required
                                                    class="form-control">
                                                    <option value="" disabled selected hidden>Etablissement
                                                    </option>
                                                    @foreach ($etablissement as $item)
                                                        <option value="{{ $item->nomEtablissement }}">
                                                            {{ $item->nomEtablissement }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <br>
                                        <input type="submit" value="Save" class="btn bg-gradient-info">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
