            <!-- Ajouter Modal Akhay Ayub hhh -->
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalSignTitle"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg-4" role="document">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-left">
                                    <h3 class="font-weight-bolder text-info text-gradient">Modifier un label </h3>
                                    <p class="mb-0"></p>
                                </div>
                                <div class="card-body pb-3">
                                    <form role="form text-left" method="POST" action="{{ route('update-label') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <input type="text" name="id" value="" id="editId" required
                                            class="form-control" hidden>

                                        <div class="col-md-12 mb-2">
                                            <label>Nom</label>
                                            <input type="text" name="nom" id="editNom" required
                                                class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <label>Date delebiration</label>
                                            <input class="form-control" type="date" id="editDate"
                                                name="date_delibration" min="{{ now()->format('Y-m-d') }}" />
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
                // Get the "nom" and "editDate" input elements
                var nomInput = document.getElementById('editNom');
                var dateInput = document.getElementById('editDate');

                // Define the regular expression pattern for "nom"
                var nomRegex = /^.{2,}$/; // Matches any text with a minimum length of 2 characters

                // Add event listener for input event on "nom" input
                nomInput.addEventListener('input', function() {
                    var inputValue = this.value;

                    if (nomRegex.test(inputValue)) {
                        // Input is valid
                        this.classList.remove('is-invalid');
                        this.classList.add('is-valid');
                    } else {
                        // Input is invalid
                        this.classList.remove('is-valid');
                        this.classList.add('is-invalid');
                    }
                });

                // Add event listener for change event on "editDate" input
                dateInput.addEventListener('change', function() {
                    if (this.value) {
                        // Date is selected
                        this.classList.add('is-valid');
                    } else {
                        // Date is not selected
                        this.classList.remove('is-valid');
                    }
                });

                // Add event listener for form submit event
                var form = document.querySelector('#editModal form');
                form.addEventListener('submit', function(event) {
                    // Check if any input has the "is-invalid" class
                    var inputs = form.querySelectorAll('.is-invalid');
                    if (inputs.length > 0) {
                        // At least one input is invalid, prevent form submission
                        event.preventDefault();
                    }
                });
            </script>
