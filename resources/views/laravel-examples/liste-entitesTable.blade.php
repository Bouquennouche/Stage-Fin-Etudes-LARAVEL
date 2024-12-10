<table id="entitesTable" class="table align-items-center table-hover mb-1">
    <thead>
        <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">
                ID
            </th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-4 text-left">
                Nom
            </th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-4 text-left">
                Adresse
            </th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-4 text-left">
                Téléphone
            </th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-0 text-left">
                Nombres d'utilisateurs
            </th>
            <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                Action
            </th>
        </tr>
    </thead>
    <tbody class="entiteBody">
        @foreach ($entites as $item)
            <tr class="">
                <td class="ps-4" onclick="window.location = '{{ route('utilisateur', ['id' => $item->id]) }}' ;">
                    <p class="text-xs font-weight-bold mb-0">{{ $item->id }}</p>
                </td>
                <td class="ps-4" onclick="window.location = '{{ route('utilisateur', ['id' => $item->id]) }}' ;">
                    <p class="text-xs font-weight-bold mb-0">{{ $item->nom }}</p>
                </td>
                <td class="ps-4" onclick="window.location = '{{ route('utilisateur', ['id' => $item->id]) }}' ;">
                    <p class="text-xs font-weight-bold mb-0">{{ $item->adresse }}</p>
                </td>
                <td class="ps-4" onclick="window.location = '{{ route('utilisateur', ['id' => $item->id]) }}' ;">
                    <p class="text-xs font-weight-bold mb-0">{{ $item->telephone }}</p>
                </td>
                <td class="ps-4" onclick="window.location = '{{ route('utilisateur', ['id' => $item->id]) }}' ;">
                    <p class="text-xs font-weight-bold mb-0 ps-5">{{ $item->utilisateurs->count() }}</p>
                </td>
                <td class="text-left">
                    <a href="#" value="{{ $item->id }}" class="mx-1 editBtn"
                        data-bs-original-title="Edit user">
                        <i class="fas fa-user-edit text-success text-gradient"></i>
                    </a>

                    <span>
                        <a href="#" value="{{ $item->id }}" class="mx-2 deleteBtn"
                            data-bs-original-title="delete user">
                            <i class="cursor-pointer fas fa-trash text-danger text-gradient"></i>
                        </a>
                    </span>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


<style>
    .entiteBody {
        cursor: pointer;
    }
</style>
