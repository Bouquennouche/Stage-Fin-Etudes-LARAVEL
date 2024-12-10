<!-- Ajouter Modal Akhay Ayub hhh -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalSignTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg-4" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                        <h3 class="font-weight-bolder text-info text-gradient">Modifier un etablissement</h3>
                        <p class="mb-0"></p>
                    </div>
                    <div class="card-body pb-3">
                        <form role="form text-left" method="POST" action="{{ route('update-etabe') }}"
                            enctype="multipart/form-data" onsubmit="return validateFormEditEtablissement()">
                            @csrf
                            @method('PUT')
                            <input type="text" name="id" value="" id="editId" required
                                class="form-control" hidden>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Nom Etablissemnt</label>
                                    <input type="text" name="nomEtablissement" id="editNom" required
                                        class="form-control" onkeyup="validateInput('editNom', /^[A-Za-z]{2,}$/)">
                                    <div class="invalid-feedback">Veuillez enter un nom valide.</div>
                                </div>
                                <div class="col-md-6 ">
                                    <label>Email</label>
                                    <input type="email" name="email" id="editEmail" required class="form-control"
                                        onkeyup="validateInput('editEmail', /^[^\s@]+@[^\s@]+\.[^\s@]+$/)">
                                    <div class="invalid-feedback">Veuillez enter un email valide.</div>

                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Adresse</label>
                                    <input type="text" name="adresse" id="editAdresse" required class="form-control"
                                        onkeyup="validateInput('editAdresse', /.+/)">
                                    <div class="invalid-feedback">Veuillez enter une adresse valide.</div>
                                </div>
                                <div class="col-md-6 ">
                                    <label>Ville</label>
                                    <input type="text" name="ville" id="editVille" required class="form-control"
                                        onkeyup="validateInput('editVille', /^[A-Za-z]{2,}$/)">
                                    <div class="invalid-feedback">Veuillez une ville valide.</div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Telephone</label>
                                    <input type="text" name="telephone" id="editTelephone" required
                                        class="form-control"
                                        onkeyup="validateInput('editTelephone', /^(06|05|07)\d{8}$/)">
                                    <div class="invalid-feedback">Le numéro de téléphone doit être un numéro marocain
                                        valide (06, 05 ou 07 suivi de 8 chiffres).</div>
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

<script>
    function validateInput(inputId, regex) {
        var input = document.getElementById(inputId);

        if (regex.test(input.value)) {
            input.classList.remove("is-invalid");
            input.classList.add("is-valid");
        } else {
            input.classList.remove("is-valid");
            input.classList.add("is-invalid");
        }
    }

    function validateFormEditEtablissement() {
        var nomEtab = document.getElementById("editNom").value;
        var email = document.getElementById("editEmail").value;
        var adresse = document.getElementById("editAdresse").value;
        var ville = document.getElementById("editVille").value;
        var telephone = document.getElementById("editTelephone").value;

        var regexNom = /^[A-Za-z]{2,}$/; // Regex to match names with a minimum length of 2
        var regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Regex to match email format

        if (!regexNom.test(nomEtab)) {
            document.getElementById("editNom").classList.add("is-invalid");
            return false;
        } else {
            document.getElementById("editNom").classList.remove("is-invalid");
        }

        if (!regexNom.test(ville)) {
            document.getElementById("editVille").classList.add("is-invalid");
            return false;
        } else {
            document.getElementById("editVille").classList.remove("is-invalid");
        }

        if (!/.+/.test(adresse)) {
            document.getElementById("editAdresse").classList.add("is-invalid");
            return false;
        } else {
            document.getElementById("editAdresse").classList.remove("is-invalid");
        }

        if (!regexEmail.test(email)) {
            document.getElementById("editEmail").classList.add("is-invalid");
            return false;
        } else {
            document.getElementById("editEmail").classList.remove("is-invalid");
        }

        return true;
    }
</script>
