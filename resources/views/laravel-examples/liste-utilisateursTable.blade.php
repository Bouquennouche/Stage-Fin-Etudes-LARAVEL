<table id="utilisateursTable" class="table align-items-center mb-0">
    <thead>
        <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Id
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">
                Nom
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Prenom
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Action
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($utilisateurs as $item)
            <tr>
                <td class="ps-4">
                    <p class="text-xs font-weight-bold mb-0">{{ $item->id }}</p>
                </td>
                <td class="text-center">
                    <p class="text-xs font-weight-bold mb-0">{{ $item->nom }}</p>
                </td>
                <td class="text-center">
                    <p class="text-xs font-weight-bold mb-0">{{ $item->prenom }}</p>
                </td>
                <td class="text-center">
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
