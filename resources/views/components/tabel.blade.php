<div class="table-responsive">
    <table id="example" class="table table-striped table-bordered my-3">
        <thead class="table-primary">
            <tr class="align-middle">
                @foreach ($headerTable as $item)
                    <th class="text-nowrap text-center">{{ $item }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($data as $p)
                <tr>
                    <td class="text-center">{{ $no++ }}</td>

                    @foreach ($p as $key => $item)
                        @unless ($key === 'id' || $key === 'created_at' || $key === 'updated_at' || $key === 'Penghuni_idPenghuni')
                            <td class="text-center">{{ $item }}</td>
                        @endunless
                    @endforeach

                    <td class="action-buttons m-0 p-2 text-center">
                        <form method="POST" action=""
                            class="d-flex flex-column flex-sm-row gap-2 justify-content-center align-items-center">
                            @csrf
                            @method('DELETE')

                            @if (isset($view) && $view == 'true')
                                <x-Button.button_view btn="btn btn-success btn-sm me-2" icon="fas fa-eye" messege="View"
                                    :rute="$showroute" :id="$p['id']" />
                            @endif

                            <!-- Tombol add -->
                            @if (isset($add) && $add == 'true')
                                <x-Button.button_add btn="btn btn-primary btn-sm me-2" icon="fas fa-add"
                                    messege="Tambah Penghuni" :rute="$addroute" :id="$p['id']"/>
                            @endif

                            <!-- Tombol Edit -->
                            @if (isset($edit) && $edit == 'true')
                                <x-Button.button_edit :rute="$editroute" :id="$p['id']" btn="btn btn-warning btn-sm me-2" icon="fas fa-edit" messege="Edit" />
                            @endif

                            <!-- Tombol Delete -->
                            <x-Button.button_submit btn="btn btn-danger btn-sm" icon="fas fa-trash-alt"
                                messege="Delete" />
                        </form>
                    </td>
            @endforeach
        </tbody>
    </table>
</div>

