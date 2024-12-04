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
        $no=1
        @endphp
        @foreach($data as $p)
        <tr>
            <td>{{ $no++ }}</td>
            
            @foreach($p as $key => $item)
                @unless($key === 'id' || $key === "created_at" || $key === "updated_at"|| $key === "Penghuni_idPenghuni")
                    <td>{{ $item }}</td>
                @endunless
            @endforeach
            <td>
                {{-- <form method="POST" action="{{ route('hapus', ['table' => $table,'id' =>$row['id']]) }}" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route('show',$p['id'])}}" class="text-info me-2"><i
                            class="fas fa-eye"></i></a>
                    <a href="{{ route('edit', $p['id'])}}" class="text-warning me-2"><i
                            class="fas fa-edit"></i></a>
                    <button type="submit" class="btn btn-link text-danger p-0"><i class="fas fa-trash-alt"></i></button>
                </form> --}}
            </td>
        </tr>
        @endforeach

    </tbody>
</table>