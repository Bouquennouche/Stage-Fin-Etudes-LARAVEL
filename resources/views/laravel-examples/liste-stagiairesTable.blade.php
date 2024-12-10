<table id="stagiaireTable" class="table table-hover align-items-center mb-0">
    <thead>
        <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                ID
            </th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                Photo
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Nom
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Prenom
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Email
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Date de creation
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Action
            </th>
        </tr>
    </thead>
    <tbody class="stagiaireBody">
        @foreach ($stagiaires as $item)
            <tr>
                <td class="ps-4" onclick="window.location = '{{ route('stage', ['id' => $item->id]) }}' ;">
                    <p class="text-xs font-weight-bold mb-0">{{ $item->id }}</p>
                </td>
                <td onclick="window.location = '{{ route('stage', ['id' => $item->id]) }}' ;">
                    <div>
                        @if ($item->photo)
                            <img src="{{ asset($item->photo) }}" class="avatar avatar-sm me-3">
                        @else
                            <img src="{{ asset('uploads/avatar.jpg') }}" class="avatar avatar-sm me-3">
                        @endif
                    </div>
                </td>
                <td class="text-center" onclick="window.location = '{{ route('stage', ['id' => $item->id]) }}' ;">
                    <p class="text-xs font-weight-bold mb-0">{{ $item->nom }}</p>
                </td>
                <td class="text-center" onclick="window.location = '{{ route('stage', ['id' => $item->id]) }}' ;">
                    <p class="text-xs font-weight-bold mb-0">{{ $item->prenom }}</p>
                </td>
                <td class="text-center" onclick="window.location = '{{ route('stage', ['id' => $item->id]) }}' ;">
                    <p class="text-xs font-weight-bold mb-0">{{ $item->email }}</p>
                </td>
                <td class="text-center" onclick="window.location = '{{ route('stage', ['id' => $item->id]) }}' ;">
                    <span class="text-secondary text-xs font-weight-bold">{{ $item->created_at }}</span>
                </td>
                <td class="text-center">
                    <a href="#" value="{{ $item->id }}" class="mx-1 viewBtn"
                        data-bs-original-title="Edit user">
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


<style>
    .stagiaireBody tr {
        cursor: pointer;
    }
</style>
