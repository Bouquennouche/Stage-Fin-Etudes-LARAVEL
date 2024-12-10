<!-- Ajouter Modal Akhay Ayub hhh -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalSignTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg-4" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                        <h3 class="font-weight-bolder text-info text-gradient">Modifier une reference</h3>
                        <p class="mb-0"></p>
                    </div>
                    <div class="card-body pb-3">
                        <form role="form text-left" method="POST" action="{{ route('update-reference') }}"
                            enctype="multipart/form-data" onsubmit="return validateFormEdit()">
                            @csrf
                            @method('PUT')
                            <input type="text" name="id" value="" id="editId" required
                                class="form-control" hidden>
                            <div class="col-md-12">
                                <label>Nom</label>
                                <input type="text" name="nom" id="editNom" required class="form-control"
                                    onkeyup="validateInputEdit('editNom')">
                                <div class="invalid-feedback">Veuillez enter un nom valide.</div>
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


