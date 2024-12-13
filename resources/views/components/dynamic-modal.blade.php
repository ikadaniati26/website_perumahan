<div class="modal fade" id="dynamicModal" tabindex="-1" aria-labelledby="dynamicModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg ">
        <div class="modal-content border-0">
            <!-- Header -->
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title fw-bold" id="dynamicModalLabel">{{ $title ?? 'Dynamic Modal' }}</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Body -->
            <div class="modal-body p-4" id="dynamicModalBody" style="background-color: #f8f9fa;">
                {{ $slot }}
            </div>

            <!-- Footer -->
            <div class="modal-footer d-flex justify-content-between bg-light">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    <i class="fas fa-times me-1"></i> Tutup
                </button>
                @isset($footerButton)
                {{ $footerButton }}
                @endisset
            </div>
        </div>
    </div>
</div>
