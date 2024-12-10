@extends('layouts.user_type.auth')

@section('content')
    <div>


        <div class="row">
            <div class="col-12">
                <div class="card mb-4 mx-4">
                    <div class="card-header pb-0">
                        <div class="d-flex flex-row justify-content-between">
                            <div>
                                <h5 class="mb-0">Stagiaires</h5>
                            </div>
                            <button type="button" href="#" class="btn bg-gradient-info btn-sm mb-0"
                                data-bs-toggle="modal" data-bs-target="#ajouterModal">+&nbsp; Stagiaire</button>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0 table-data">
                            @include('laravel-examples.liste-stagiairesTable')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.Modals.Stagiaires.addStagiaire')
    @include('components.Modals.Stagiaires.editStagiaire')
    @include('components.Modals.Stagiaires.deleteStagiare')
    @include('components.Modals.Stagiaires.viewStagiaire')
@endsection



@section('scripts')
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#stagiaireTable').DataTable({
                pageLength: 6,
                info: false,
                lengthChange: false,
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'csv',
                        className: ' btn bg-gradient-info btn-sm me-2',
                        text: 'CSV',
                        exportOptions: {
                            columns: [0, 2, 3, 4, 5]
                        }
                    },
                    {
                        extend: 'print',
                        className: 'btn bg-gradient-info btn-sm',
                        text: 'Print',
                        exportOptions: {
                            columns: [0, 2, 3, 4, 5]
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
    <script src="{{ asset('js/editStagiare.js') }}"></script>
@endsection

<style>
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
