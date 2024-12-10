<!-- Ajouter Modal Akhay Ayub hhh -->
<div class="modal fade" id="ajouterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalSignTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                        <h3 class="font-weight-bolder text-info text-gradient">Ajouter un stagiaire</h3>
                        <p class="mb-0"></p>
                    </div>
                    <div class="card-body pb-3">
                        <form role="form text-left" method="POST" action="/storeStagiaire"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Nom</label>
                                    <input type="text" name="nom" id="nom" required class="form-control"
                                        oninput="validateName(this)">
                                    <div class="invalid-feedback">Le nom doit contenir au moins 2 caractères et ne peut
                                        contenir que des lettres et des espaces.</div>
                                </div>
                                <div class="col-md-6">
                                    <label>Prénom</label>
                                    <input type="text" name="prenom" id="prenom" required class="form-control"
                                        oninput="validateName(this)">
                                    <div class="invalid-feedback">Le Prenom doit contenir au moins 2 caractères et ne
                                        peut
                                        contenir que des lettres et des espaces.</div>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Genre</label>
                                    <select name="genre" id="genre" required class="form-control">
                                        <option value="" disabled selected hidden>genre</option>
                                        <option value="homme">homme</option>
                                        <option value="femme">femme</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>CIN</label>
                                    <input type="text" name="CIN" id="cin" required class="form-control"
                                        oninput="validateCIN(this)">
                                    <div class="invalid-feedback">Le CIN doit commencer par une ou deux lettres suivies
                                        de 1 à 7 chiffres.</div>
                                </div>
                            </div>
                            <br>


                            <div class="row">
                                <div class="col-md-6">
                                    <label>ville</label>
                                    <input type="text" name="ville" id="ville" required class="form-control"
                                        oninput="validateText(this)">
                                    <div class="invalid-feedback">La ville doit contenir au moins 2 caractères.</div>
                                </div>
                                <div class="col-md-6">
                                    <label>adresse</label>
                                    <input type="text" name="adresse" id="adresse" required class="form-control"
                                        oninput="validateText(this)">
                                    <div class="invalid-feedback">L'adresse doit contenir au moins 2 caractères.</div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Date naissance</label>
                                    <input type="date" name="dateNaissance" id="dateNaissance" required
                                        class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>Lieu naissance</label>
                                    <input type="text" name="lieuNaissance" id="lieuNaissance" required
                                        class="form-control" oninput="validateText(this)">
                                    <div class="invalid-feedback">Veuillez entrer un lieu naissance valide.</div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Tel</label>
                                    <input type="text" name="telephone" id="telephone" required class="form-control"
                                        oninput="validateTelephone(this)">
                                    <div class="invalid-feedback">Le numéro de téléphone doit être un numéro marocain
                                        valide (06, 05 ou 07 suivi de 8 chiffres).</div>
                                </div>
                                <div class="col-md-6">
                                    <label>Email</label>
                                    <input type="email" name="email" id="email" required class="form-control"
                                        oninput="validateEmail(this)">
                                    <div class="invalid-feedback">Veuillez entrer une adresse e-mail valide.</div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Date début</label>
                                    <input type="date" name="dateDebut" id="dateDebut" required class="form-control"
                                        oninput="validateDate(this)">
                                </div>
                                <div class="col-md-6">
                                    <label>Date fin</label>
                                    <input type="date" name="dateFin" id="dateFin" required
                                        class="form-control" oninput="validateDate(this)">
                                    <div class="invalid-feedback">Date fin doit être posterieure au date de debut
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Sujet</label>
                                    <input type="text" name="sujet" id="sujet" required
                                        class="form-control" oninput="validateText(this)">
                                </div>
                                <div class="invalid-feedback">Veuillez entrer un sujet valide.</div>
                            </div>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <select name="nomEncadrant" id="nomEncadrant" required class="form-control">
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
                                            <option value="{{ $item->nomDomaine }}">{{ $item->nomDomaine }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select name="nomEtablissement" id="nomEtablissement" required
                                        class="form-control">
                                        <option value="" disabled selected hidden>Etablissement</option>
                                        @foreach ($etablissement as $item)
                                            <option value="{{ $item->nomEtablissement }}">
                                                {{ $item->nomEtablissement }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="photo">Photo</label>
                                    <input type="file" name="photo" id="photo" class="form-control-file">
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

<script>
    function validateName(input) {
        const regex = /^[a-zA-Z\s]+$/;
        if (regex.test(input.value)) {
            input.classList.remove('is-invalid');
            input.classList.add('is-valid');
        } else {
            input.classList.remove('is-valid');
            input.classList.add('is-invalid');
        }
    }

    function validateText(input) {
        const regex = /^[a-zA-Z\s]+$/;
        if (regex.test(input.value) && input.value.length > 1) {
            input.classList.remove('is-invalid');
            input.classList.add('is-valid');
        } else {
            input.classList.remove('is-valid');
            input.classList.add('is-invalid');
        }
    }

    function validateCIN(input) {
        const regex = /^[A-Za-z]{1,2}\d{1,7}$/;
        input.value = input.value.toUpperCase();
        if (regex.test(input.value)) {
            input.classList.remove('is-invalid');
            input.classList.add('is-valid');
        } else {
            input.classList.remove('is-valid');
            input.classList.add('is-invalid');
        }
    }

    function validateTelephone(input) {
        const regex = /^(05|06|07)\d{8}$/;
        if (regex.test(input.value)) {
            input.classList.remove('is-invalid');
            input.classList.add('is-valid');
        } else {
            input.classList.remove('is-valid');
            input.classList.add('is-invalid');
        }
    }

    function validateEmail(input) {
        const regex = /^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/;
        if (regex.test(input.value)) {
            input.classList.remove('is-invalid');
            input.classList.add('is-valid');
        } else {
            input.classList.remove('is-valid');
            input.classList.add('is-invalid');
        }
    }

    function validateDate(input) {
        const dateDebut = document.getElementById('dateDebut').value;
        const dateFin = document.getElementById('dateFin').value;

        if (dateDebut && dateFin) {
            if (dateFin >= dateDebut) {
                input.classList.remove('is-invalid');
                input.classList.add('is-valid');
            } else {
                input.classList.remove('is-valid');
                input.classList.add('is-invalid');
            }
        }
    }

    function checkInvalidInputs() {
        const inputs = document.querySelectorAll('#ajouterModal input, #ajouterModal select');

        for (let i = 0; i < inputs.length; i++) {
            const input = inputs[i];

            if (input.classList.contains('is-invalid')) {
                return true; // Return true if an invalid input is found
            }
        }

        return false; // Return false if no invalid inputs are found
    }

    // Function to enable or disable the submit button based on input validity
    function updateSubmitButtonState() {
        const submitButton = document.querySelector('#ajouterModal input[type="submit"]');
        submitButton.disabled = checkInvalidInputs();
    }

    // Attach event listeners for input validation
    document.querySelectorAll('#ajouterModal input, #ajouterModal select').forEach(function(input) {
        input.addEventListener('input', function() {
            // Perform input validation when inputs change
            const validationFunctionName = input.getAttribute('oninput');
            if (window[validationFunctionName]) {
                window[validationFunctionName](input);
            }

            updateSubmitButtonState(); // Update submit button state
        });
    });
</script>
