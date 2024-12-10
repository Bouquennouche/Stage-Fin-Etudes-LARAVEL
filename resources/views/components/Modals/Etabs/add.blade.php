<!-- Ajouter Modal Akhay Ayub hhh -->
<div class="modal fade" id="ajouterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalSignTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg-4" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                        <h3 class="font-weight-bolder text-info text-gradient">Ajouter un etablissement
                        </h3>
                        <p class="mb-0"></p>
                    </div>
                    <div class="card-body pb-3">
                        <form role="form text-left" method="POST" action="/store-etabe" enctype="multipart/form-data"
                            onsubmit="return validateFormEtablissement()">
                            @csrf
                            <div class="col-md-12">
                                <label>Nom</label>
                                <input type="text" name="nomEtablissement" id="nomEtab" required
                                    class="form-control" onkeyup="validateInput('nomEtab', /^[A-Za-z]{2,}$/)">
                                <div class="invalid-feedback">Veuillez enter un nom valide.</div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label>Adresse</label>
                                <input type="text" name="adresse" id="adresse" required class="form-control"
                                    onkeyup="validateInput('adresse', /.+/)">
                                <div class="invalid-feedback">Veuillez entrer une adresse valide.</div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label>Ville</label>
                                <input type="text" name="ville" id="ville" required class="form-control"
                                    onkeyup="validateInput('ville', /^[A-Za-z]{2,}$/)">
                                <div class="invalid-feedback">Veuillez enter une ville valide.</div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label>Tel</label>
                                <input type="text" name="telephone" id="telephone" required class="form-control"
                                    placeholder="05,06 ou 07" onkeyup="validateInput('telephone', /^(06|05|07)\d{8}$/)">
                                <div class="invalid-feedback">Le numéro de téléphone doit être un numéro marocain
                                    valide (06, 05 ou 07 suivi de 8 chiffres).</div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label>Email</label>
                                <input type="email" name="email" id="email" required class="form-control"
                                    onkeyup="validateInput('email', /^[^\s@]+@[^\s@]+\.[^\s@]+$/)">
                                <div class="invalid-feedback">Veuillez enter un email valide.</div>
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

    function validateFormEtablissement() {
        var nomEtab = document.getElementById("nomEtab").value;
        var adresse = document.getElementById("adresse").value;
        var ville = document.getElementById("ville").value;
        var telephone = document.getElementById("telephone").value;
        var email = document.getElementById("email").value;

        var regexNom = /^[A-Za-z]{2,}$/; // Regex to match only alphabets and minimum length of 2
        var regexTel =
            /^(06|05|07)\d{8}$/; // Regex to match telephone numbers starting with 06, 05, or 07 and followed by 8 digits
        var regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Regex to match email format

        if (!regexNom.test(nomEtab)) {
            document.getElementById("nomEtab").classList.add("is-invalid");
            return false;
        } else {
            document.getElementById("nomEtab").classList.remove("is-invalid");
        }

        if (!/.+/.test(ville)) {
            document.getElementById("ville").classList.add("is-invalid");
            return false;
        } else {
            document.getElementById("ville").classList.remove("is-invalid");
        }

        if (!/.+/.test(adresse)) {
            document.getElementById("adresse").classList.add("is-invalid");
            return false;
        } else {
            document.getElementById("adresse").classList.remove("is-invalid");
        }

        if (!regexTel.test(telephone)) {
            document.getElementById("telephone").classList.add("is-invalid");
            return false;
        } else {
            document.getElementById("telephone").classList.remove("is-invalid");
        }

        if (!regexEmail.test(email)) {
            document.getElementById("email").classList.add("is-invalid");
            return false;
        } else {
            document.getElementById("email").classList.remove("is-invalid");
        }

        return true;
    }
</script>
