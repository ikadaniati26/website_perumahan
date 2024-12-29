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
            @if (!empty($data->historyPenghuni))
                @foreach ($data->historyPenghuni as $history)
                    <tr class="text-center">
                        <td>{{ $no++ }}</td>
                        <td>{{ $history->penghuni->nama }}</td>
                        <td><a href="{{asset('/public/assets/img/datadiri/'.$history->penghuni->foto_ktp)}}" target="_blank">{{ $history->penghuni->foto_ktp }}</a></td>
                        <td>{{ $history->penghuni->status_penghuni }}</td>
                        <td class="text-center">{{ $history->penghuni->no_telp }}</td>
                        <td>{{ $history->penghuni->status_menikah }}</td>
                        <td>{{ $history->tanggal_mulai }}</td>
                        <td>{{ $history->tanggal_berakhir }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
