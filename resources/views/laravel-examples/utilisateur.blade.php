@extends('layouts.user_type.auth')

@section('content')
    <div>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 mx-4">
                    <div class="card-header pb-0">
                        <div class="d-flex flex-row justify-content-between">
                            <div>
                                <h5 class="mb-0">Les utilisateurs de l'éntite {{ $entite->nom}} à {{ $entite->adresse }}
                                    </h5>
                            </div>
                            <div>
                                <button type="button" href="#" class="btn bg-gradient-info btn-sm mb-0"
                                    data-bs-toggle="modal" data-bs-target="#ajouterModal">+&nbsp; Utilisateur</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0 table-data">
                            @include('laravel-examples.liste-utilisateursTable')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.Modals.Utilisateurs.add')
    @include('components.Modals.Utilisateurs.edit')
    @include('components.Modals.Utilisateurs.delete')
@endsection


@section('scripts')
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#utilisateursTable').DataTable({
                info: false,
                lengthChange: false,
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'csv',
                        className: ' btn bg-gradient-info btn-sm me-2',
                        text: 'CSV',
                        exportOptions: {
                            columns: [0, 1 , 2]
                        }
                    },
                    {
                        extend: 'print',
                        className: 'btn bg-gradient-info btn-sm',
                        text: 'Print',
                        exportOptions: {
                            columns: [0,1,2]
                        }
                    },
                ],
                language: {
                    url: '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json',
                    "paginate": {
                        "next": '&raquo;',
                        "previous": '&laquo;'
                    },
                }
            });
        });
    </script>
    <script src="{{ asset('js/Utilisateurs/edit.js') }}"></script>
@endsection

<style scoped>
    .pagination .active a {
        background-color: #03a9f4 !important;
        border: #03a9f4 !important;
    }

    .pagination .page-link {
        padding: 6px !important;
        margin: 3px !important;
    }

    div.dataTables_wrapper div.dataTables_paginate {
        text-align: left !important;
    }

    .dataTables_wrapper {
        overflow-x: hidden;
        flex-wrap: wrap !important;
        justify-content: flex-start !important;
    }

    .dataTables_filter label {
        max-width: 200px !important;
        margin-left: 20px !important;
    }

    .dt-buttons {
        text-align: center !important;
    }

    .pagination {
        padding-left: 30px !important;
        padding-top: 20px !important;
    }
</style>
