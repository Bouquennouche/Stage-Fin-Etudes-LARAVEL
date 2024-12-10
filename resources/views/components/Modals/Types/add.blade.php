<!-- Ajouter Modal Akhay Ayub hhh -->
<div class="modal fade" id="ajouterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalSignTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg-4" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                        <h3 class="font-weight-bolder text-info text-gradient">Ajouter un type</h3>
                        <p class="mb-0"></p>
                    </div>
                    <div class="card-body pb-3">
                        <form role="form text-left" method="POST" action="/storeType{{$fabricant->id}}/" enctype="multipart/form-data"
                            onsubmit="return validateForm()">
                            @csrf

                            <div class="col-md-12">
                                <label>Nom</label>
                                <input type="text" name="nom" id="nom" required class="form-control"
                                    onkeyup="validateInput('nomDomaine')">
                                <div class="invalid-feedback">Veuillez enter un nom valide.</div>
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
    function validateInput(inputId) {
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

    function validateForm() {
        var nomDomaine = document.getElementById("nomDomaine").value;
        var specialite = document.getElementById("specialite").value;
        var regex = /^[A-Za-z]{3,}$/; // Regex to match only alphabets and minimum length of 3

        if (!regex.test(nomDomaine)) {
            document.getElementById("nomDomaine").classList.add("is-invalid");
            return false;
        } else {
            document.getElementById("nomDomaine").classList.remove("is-invalid");
        }

        if (!regex.test(specialite)) {
            document.getElementById("specialite").classList.add("is-invalid");
            return false;
        } else {
            document.getElementById("specialite").classList.remove("is-invalid");
        }

        return true;
    }
</script>
