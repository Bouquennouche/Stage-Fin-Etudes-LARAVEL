<table id="stagesTable" class="table table-hover align-items-center mb-0">
    <thead>
        <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Id
            </th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-7">
                Date de debut
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Date du fin
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Sujet
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Nom Encadrant
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Action
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($stages as $item)
            <tr>
                <td class="ps-4">
                    <p class="text-xs font-weight-bold mb-0">{{ $item->id }}</p>
                </td>
                <td class="text-center">
                    <p class="text-xs font-weight-bold mb-0">{{ $item->dateDebut }}</p>
                </td>
                <td class="text-center">
                    <p class="text-xs font-weight-bold mb-0">{{ $item->dateFin }}</p>
                </td>
                <td class="text-center">
                    <p class="text-xs font-weight-bold mb-0">{{ $item->sujet }}</p>
                </td>
                <td class="text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{ $item->encadrant->nomEncadrant }}</span>
                </td>
                <td class="text-center">
                    <a href="#" value="{{ $item->id }}" class="mx-1 viewBtn"
                        data-bs-original-title="View user">
                        <i class="fas fa-eye text-info text-gradient"></i>
                    </a>
                    <a href="#" value="{{ $item->id }}" class="mx-3 editBtn"
                        data-bs-original-title="Edit user">
                        <i class="fas fa-user-edit text-success text-gradient"></i>
                    </a>

                    <span>
                        <a href="#" value="{{ $item->id }}" class="mx-1 deleteBtn"
                            data-bs-original-title="delete user">
                            <i class="cursor-pointer fas fa-trash text-danger text-gradient"></i>
                        </a>
                    </span>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
