<!-- Modifier Modal Akhay Ayub hhh -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalSignTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                        <h3 class="font-weight-bolder text-info text-gradient">Modifier un stagiaire</h3>
                        <p class="mb-0"></p>
                    </div>
                    <div class="card-body pb-3">
                        <form role="form text-left" method="POST" action="{{ route('update-stagiaire') }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="text" name="id" value="" id="editId" required
                                class="form-control" hidden>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Nom</label>
                                    <input type="text" name="nom" value="" id="editNom" required
                                        class="form-control">
                                    <div class="invalid-feedback">Le nom doit contenir au moins 2 caractères et ne peut
                                        contenir que des lettres et des espaces.</div>
                                </div>
                                <div class="col-md-6">
                                    <label>Prénom</label>
                                    <input type="text" name="prenom" id="editPrenom" required class="form-control">
                                    <div class="invalid-feedback">Le prénom doit contenir au moins 2 caractères et ne
                                        peut contenir que des lettres et des espaces.</div>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Genre</label>
                                    <select name="genre" id="editGenre" required class="form-control">
                                        <option value="" disabled selected hidden>genre</option>
                                        <option value="homme">homme</option>
                                        <option value="femme">femme</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>CIN</label>
                                    <input type="text" name="CIN" id="editCin" required class="form-control">
                                    <div class="invalid-feedback">Le CIN doit commencer par une ou deux lettres suivies
                                        de 1 à 7 chiffres.</div>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Ville</label>
                                    <input type="text" name="ville" id="editVille" required class="form-control">
                                    <div class="invalid-feedback">La ville doit contenir au moins 2 caractères.</div>
                                </div>
                                <div class="col-md-6">
                                    <label>Adresse</label>
                                    <input type="text" name="adresse" id="editAdresse" required class="form-control">
                                    <div class="invalid-feedback">L'adresse doit contenir au moins 2 caractères.</div>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Date naissance</label>
                                    <input type="date" name="dateNaissance" id="editDateNais" required
                                        class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>Lieu naissance</label>
                                    <input type="text" name="lieuNaissance" id="editLieuNais" required
                                        class="form-control">
                                    <div class="invalid-feedback">Veuillez entrer un lieu naissance valide.</div>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Tel</label>
                                    <input type="text" name="telephone" id="editTel" required class="form-control">
                                    <div class="invalid-feedback">Le numéro de téléphone doit être un numéro marocain
                                        valide (06, 05 ou 07 suivi de 8 chiffres).</div>
                                </div>
                                <div class="col-md-6">
                                    <label>Email</label>
                                    <input type="email" name="email" id="editEmail" required class="form-control">
                                    <div class="invalid-feedback">Veuillez entrer une adresse e-mail valide.</div>
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

<script>
    // Function to validate input using regex
    function validateInput(inputId, regex) {
        const inputElement = document.getElementById(inputId);
        const inputValue = inputElement.value.trim();

        if (regex.test(inputValue)) {
            inputElement.classList.remove('is-invalid');
            inputElement.classList.add('is-valid');
        } else {
            inputElement.classList.remove('is-valid');
            inputElement.classList.add('is-invalid');
        }
    }

    // Function to validate the form inputs
    function validateFormInputs() {
        // Regex patterns for each input field
        const nameRegex = /^[A-Za-z\s]{2,}$/;
        const textRegex = /^.{2,}$/;
        const cinRegex = /^[A-Za-z]{1,2}[0-9]{1,7}$/;
        const phoneRegex = /^(06|05|07)[0-9]{8}$/;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        // Reset the validity state of the form
        let isFormValid = true;

        // Validate input fields
        validateInput('editNom', nameRegex);
        validateInput('editPrenom', nameRegex);
        validateInput('editVille', textRegex);
        validateInput('editAdresse', textRegex);
        validateInput('editCin', cinRegex);
        validateInput('editTel', phoneRegex);
        validateInput('editEmail', emailRegex);

        // Check if any input field has the "is-invalid" class
        const invalidInputs = document.querySelectorAll('.is-invalid');
        const submitButton = document.querySelector('#editModal form input[type="submit"]');

        if (invalidInputs.length > 0) {
            isFormValid = false;
        }

        // Update submit button state based on form validity
        submitButton.disabled = !isFormValid;

        return isFormValid;
    }

    // Attach event listeners for input validation on keyup event
    document.getElementById('editNom').addEventListener('keyup', validateFormInputs);
    document.getElementById('editPrenom').addEventListener('keyup', validateFormInputs);
    document.getElementById('editVille').addEventListener('keyup', validateFormInputs);
    document.getElementById('editAdresse').addEventListener('keyup', validateFormInputs);
    document.getElementById('editCin').addEventListener('keyup', validateFormInputs);
    document.getElementById('editTel').addEventListener('keyup', validateFormInputs);
    document.getElementById('editEmail').addEventListener('keyup', validateFormInputs);

    // Add event listener for form submission
    document.querySelector('#editModal form').addEventListener('submit', function(event) {
        if (!validateFormInputs()) {
            event.preventDefault(); // Prevent form submission
        }
    });
</script>
