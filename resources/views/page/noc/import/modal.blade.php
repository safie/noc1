<!-- Modal -->
<div class="modal fade" id="modalLulus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            @if ($noc->status_noc == 'noc_1')
                @include('page.noc.import.modal.01Semak')
            @endif
            @if ($noc->status_noc == 'noc_2')
                @include('page.noc.import.modal.02MohonUlasan')
            @endif
            @if ($noc->status_noc == 'noc_3')
                @include('page.noc.import.modal.03SemakUlasan')
            @endif
        </div>
    </div>
</div>
