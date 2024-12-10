@extends('layouts.user_type.auth')

@section('content')
    <div>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 mx-4">
                    <div class="card-header pb-0">
                        <div class="d-flex flex-row justify-content-between">
                            <div>
                                <h5 class="mb-0">Refernces : {{ $type->nom}}</h5>
                            </div>
                            <div>
                                <button type="button" href="#" class="btn bg-gradient-info btn-sm mb-0"
                                    data-bs-toggle="modal" data-bs-target="#ajouterModal">+&nbsp; Reference</button>
                            </div>

                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0 table-data">
                            <table class="table table-hover align-items-center mb-0 cell-border compact hover" data-page-length='6'
                                id="referencesTable">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-9">
                                            ID
                                        </th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-9 ps-2">
                                            Nom
                                        </th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-9 ps-2">
                                            Action
                                        </th>

                                    </tr>
                                </thead>
                                <tbody class="fabricantBody">
                                    @foreach ($references as $item)
                                        <tr>
                                            <td class="ps-4" >
                                                <p class="text-xs font-weight-bold mb-0">{{ $item->id }}</p>
                                            </td>
                                            <td class="text-left" >
                                                <p class="text-xs font-weight-bold mb-0">{{ $item->nom }}</p>
                                            </td>
                                            <td class="">

                                                <a href="#" value="{{ $item->id }}" class="mx-3 editBtn"
                                                    data-bs-original-title="Edit user">
                                                    <i class="fas fa-user-edit text-success text-gradient"></i>
                                                </a>

                                                <span>
                                                    <a href="#" value="{{ $item->id }}" class="mx-1 deleteBtn"
                                                        data-bs-original-title="delete user">
                                                        <i
                                                            class="cursor-pointer fas fa-trash text-danger text-gradient"></i>
                                                    </a>
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.Modals.References.add')
    @include('components.Modals.References.edit')
    @include('components.Modals.References.delete')
@endsection


@section('scripts')
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#referencesTable').DataTable({
                info: false,
                lengthChange: false,
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'csv',
                        className: ' btn bg-gradient-info btn-sm me-2',
                        text: 'CSV',
                        exportOptions: {
                            columns: [0,1]
                        }
                    },
                    {
                        extend: 'print',
                        className: 'btn bg-gradient-info btn-sm',
                        text: 'Print',
                        exportOptions: {
                            columns: [0,1]
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
    <script src="{{ asset('js/References/edit.js') }}"></script>
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

    .fabricantBody tr {
        cursor: pointer;
    }

</style>
