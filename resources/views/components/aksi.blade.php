<div class="d-flex">
    {{-- Tombol Detail --}}
    @if ($showDetail ?? true)
        <a href="{{ route('show', $id) }}" class="text-info me-2" title="Detail">
            <i class="fas fa-eye"></i>
        </a>
    @endif

    {{-- Tombol Edit --}}
    @if ($showEdit ?? true)
        <a href="{{ route('edit', $id) }}" class="text-warning me-2" title="Edit">
            <i class="fas fa-edit"></i>
        </a>
    @endif

    {{-- Tombol Hapus --}}
    @if ($showDelete ?? true)
        <form method="POST" action="{{ route('hapus', ['id' => $id]) }}" style="display:inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-link text-danger p-0" title="Hapus">
                <i class="fas fa-trash-alt"></i>
            </button>
        </form>
    @endif
</div>
