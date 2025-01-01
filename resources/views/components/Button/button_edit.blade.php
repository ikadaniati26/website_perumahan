<button type="button" class="{{ $btn }}" {{$disable ?? ""}}>
    <a href="{{ route($rute, ['id' => $id]) }}" class="tex-decoration-none text-dark">
        <i class="{{ $icon }}"></i> {{ $messege }}
    </a>
</button>