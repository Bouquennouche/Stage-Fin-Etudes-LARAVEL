<table id="materialsTable" class="table  align-items-center mb-0">
    <thead>
        <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">
                ID
            </th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">
                Num serie
            </th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">
                reference
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                type
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Fabricant
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Modele
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Num inventaire
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Utilisateur
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Action
            </th>
        </tr>
    </thead>
    <tbody class="stagiaireBody">
        @foreach ($materials as $item)
            <tr>
                <td class="ps-4">
                    <p class="text-xs font-weight-bold mb-0">{{ $item->id }}</p>
                </td>
                <td class="text-center">
                    <p class="text-xs font-weight-bold mb-0">{{ $item->numero_serie }}</p>
                </td>
                <td class="text-center">
                    <p class="text-xs font-weight-bold mb-0">{{ $item->reference->nom}}</p>
                </td>
                <td class="text-center">
                    <p class="text-xs font-weight-bold mb-0">{{ $item->type->nom }}</p>
                </td>
                <td class="text-center">
                    <p class="text-xs font-weight-bold mb-0">{{ $item->fabricant->nom }}</p>
                </td>
                <td class="text-center">
                    <p class="text-xs font-weight-bold mb-0">{{ $item->modele }}</p>
                </td>
                <td class="text-center">
                    <p class="text-xs font-weight-bold mb-0">{{ $item->numero_inventaire }}</p>
                </td>
                <td class="text-center">
                    <p class="text-xs font-weight-bold mb-0">{{ $item->utilisateur->nom ."_". $item->utilisateur->prenom ."_".$item->utilisateur->id }}</p>
                </td>
                <td class="text-center">
                    <a href="#" value="{{ $item->id }}" class="mx-1 editBtn"
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



