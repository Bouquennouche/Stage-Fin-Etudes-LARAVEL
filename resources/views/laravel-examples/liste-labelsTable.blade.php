<table id="labelsTable" class="table align-items-center mb-0">
    <thead>
        <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">
                ID
            </th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-left">
                Nom
            </th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-left">
                Date de delibration
            </th>
            <th class="text-left text-uppercase text-secondary text-xxs ps-2 font-weight-bolder opacity-7 ps-2">
                Status
            </th>
            <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                Action
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($labels as $item)
            <tr class=" {{ $item->status == 'actif' ? 'stagiaireBody' : '' }}">
                <td class="text-left"
                    onclick="{{ $item->status == 'actif' ? "window.location.href='" . route('materials', ['id' => $item->id]) . "'" : '' }}">
                    <p class="text-xs font-weight-bold mb-0 ps-3">{{ $item->id }}</p>
                </td>
                <td class="text-left"
                    onclick="{{ $item->status == 'actif' ? "window.location.href='" . route('materials', ['id' => $item->id]) . "'" : '' }}">
                    <p class="text-xs font-weight-bold mb-0">{{ $item->nom }}</p>
                </td>
                <td class="text-left"
                    onclick="{{ $item->status == 'actif' ? "window.location.href='" . route('materials', ['id' => $item->id]) . "'" : '' }}">
                    <p class="text-xs font-weight-bold mb-0">{{ $item->date_delibration }}</p>
                </td>
                <td class="text-left"
                    onclick="{{ $item->status == 'actif' ? "window.location.href='" . route('materials', ['id' => $item->id]) . "'" : '' }}">
                    <p class="text-xs font-weight-bold mb-0">
                        <span
                            class="badge {{ $item->status == 'actif' ? 'bg-gradient-success' : 'bg-gradient-danger' }}">{{ $item->status }}</span>
                    </p>
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
    .stagiaireBody {
        cursor: pointer;
    }

    .stagiaireBody:hover {
        background-color: lightgrey;
    }
</style>
