            <!-- Ajouter Modal Akhay Ayub hhh -->
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalSignTitle"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-left">
                                    <h3 class="font-weight-bolder text-info text-gradient">Modifier un stage
                                    </h3>
                                    <p class="mb-0"></p>
                                </div>
                                <div class="card-body pb-3">
                                    <form role="form text-left" method="POST" action="{{ route('update-stage') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <input type="text" name="id" value="" id="editId" required
                                            class="form-control" hidden>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Date de debut</label>
                                                <input type="date" name="dateDebut" value="" id="editDateDebut"
                                                    required class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Date de fin</label>
                                                <input type="date" name="dateFin" id="editDateFin" required
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <br>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Sujet</label>
                                                 <input type="text" name="sujet" id="editSujet" required
                                                 class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Note</label>
                                                <input type="text" name="note" id="editNote" placeholder="pas de note"
                                                    class="form-control">
                                            </div>
                                        </div>
                                       
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Convention</label>
                                                 <input type="file" name="convention" id="editConvention" 
                                                 class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Rapport</label>
                                                <input type="file" name="rapport" id="editRapport"  placeholder="gg"
                                                    class="form-control">
                                            </div>
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
