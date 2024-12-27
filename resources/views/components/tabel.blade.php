<div class="table-responsive">
    <table id="example" class="table table-striped table-bordered my-3">
        <thead class="table-primary">
            <tr>
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
                        <form method="POST" action="">
                            @csrf
                            @method('DELETE')

                            {{-- {{dd($p)}} --}}
                            <x-Button.button_view target="#modal_tabel" btn="btn btn-success btn-sm me-2" icon="fas fa-eye" messege="View History"/>

                            <!-- Tombol add -->
                            <x-Button.button_add btn="btn btn-primary btn-sm me-2" icon="fas fa-add" messege="Tambah Penghuni"/>


                            <!-- Tombol Edit -->
                            <x-Button.button_edit btn="btn btn-warning btn-sm me-2" icon="fas fa-edit" messege="Edit"/>

                            <!-- Tombol Delete -->
                            <x-Button.button_submit btn="btn btn-danger btn-sm" icon="fas fa-trash-alt" messege="Edit"/>
                        </form>
                    </td>
            @endforeach
        </tbody>
    </table>
</div>

<x-modal.modal_tabel/>

<script>
    $(document).ready(function() {
        $.ajax({
            type: "get",
            url: "url",
            dataType: "json",
            success: function (response) {
                
            }
        });
    });
</script>
