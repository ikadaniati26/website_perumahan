<div class="table-responsive">
    <table class="table datatable">
        <thead>
            <tr>
                @foreach ($headerTable as $item)
                <th>{{ $item }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @php
            $no = 1;
            @endphp
            @foreach($data as $p)
            <tr>
                <td>{{ $no++ }}</td>
                @foreach($p as $key => $item)
                @unless($key === 'id' || $key === "created_at" || $key === "updated_at" || $key ===
                "Penghuni_idPenghuni")
                <td>{{ $item }}</td>
                @endunless
                @endforeach
                <td>
                    <form method="POST" action="{{ route($hapusroute, ['table' => $item, 'id' => $p['id']]) }}"
                        style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        @isset($showroute)
                        <a href="{{ route($showroute, ['id' => $p['id']]) }}" class="text-info me-2"><i
                                class="fas fa-eye"></i></a>
                        @endisset
                        @isset($withModal)
                        <button type="button" class="btn btn-link text-info me-2 p-0" data-bs-toggle="modal"
                            data-bs-target="#dynamicModal" data-title="Detail Rumah"
                            data-content="{{ json_encode($p) }}">
                            <i class="fas fa-eye"></i>
                        </button>
                        @endisset

                        <a href="{{ route($editroute, ['id' => $p['id']]) }}" class="text-warning me-2"><i
                                class="fas fa-edit"></i></a>
                        <button type="submit" class="btn btn-link text-danger p-0"><i
                                class="fas fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>