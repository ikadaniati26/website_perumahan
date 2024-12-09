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
            @foreach ($data as $p)
                <tr>
                    <td>{{ $no++ }}</td>

                    @foreach ($p as $key => $item)
                        @unless ($key === 'id' || $key === 'created_at' || $key === 'updated_at' || $key === 'Penghuni_idPenghuni')
                            <td>{{ $item }}</td>
                        @endunless
                    @endforeach

                    <td class="col-12 action-buttons">
                        <form method="POST" action="">
                            @csrf
                            @method('DELETE')

                            <!-- Tombol View -->
                            <a href="{{ route($route, ['id'=>$p['id']]) }}" class="btn btn-success btn-sm me-2">
                                <i class="fas fa-eye"></i> View
                            </a>

                            {{-- <!-- Tombol Edit -->
                            <a href="{{ route('edit', $p['id']) }}" class="btn btn-warning btn-sm me-2">
                                <i class="fas fa-edit"></i> Edit
                            </a>

                            <!-- Tombol Delete -->
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash-alt"></i> Delete
                            </button> --}}
                        </form>
                    </td>
            @endforeach

        </tbody>
    </table>
</div>
