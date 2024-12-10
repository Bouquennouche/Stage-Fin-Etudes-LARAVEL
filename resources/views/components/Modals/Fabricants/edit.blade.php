<!-- Ajouter Modal Akhay Ayub hhh -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalSignTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg-4" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                        <h3 class="font-weight-bolder text-info text-gradient">Modifier un fabricant</h3>
                        <p class="mb-0"></p>
                    </div>
                    <div class="card-body pb-3">
                        <form role="form text-left" method="POST" action="{{ route('update-fabricant') }}"
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

<script>
    function validateInputEdit(inputId) {
        var input = document.getElementById(inputId);
        var regex = /^[A-Za-z]{3,}$/; // Regex to match only alphabets and minimum length of 3

        if (regex.test(input.value)) {
            input.classList.remove("is-invalid");
            input.classList.add("is-valid");
        } else {
            input.classList.remove("is-valid");
            input.classList.add("is-invalid");
        }
    }

    function validateFormEdit() {
        var editNom = document.getElementById("editNom").value;
        var editSp = document.getElementById("editSp").value;
        var regex = /^[A-Za-z]{3,}$/; // Regex to match only alphabets and minimum length of 3

        if (!regex.test(editNom)) {
            document.getElementById("editNom").classList.add("is-invalid");
            return false;
        } else {
            document.getElementById("editNom").classList.remove("is-invalid");
        }

        if (!regex.test(editSp)) {
            document.getElementById("editSp").classList.add("is-invalid");
            return false;
        } else {
            document.getElementById("editSp").classList.remove("is-invalid");
        }

        return true;
    }
</script>
