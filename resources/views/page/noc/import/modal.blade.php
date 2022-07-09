<!-- Modal -->
<div class="modal fade" id="modalLulus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            @if ($noc->status_noc == 'noc_1' OR $noc->status_noc == 'noc_17')
                @include('page.noc.import.modal.01Semak')
            @endif
            @if ($noc->status_noc == 'noc_2' OR $noc->status_noc == 'noc_18' OR $noc->status_noc == 'noc_19')
                @include('page.noc.import.modal.02MohonUlasan')
            @endif
            @if (($noc->status_noc == 'noc_3' OR $noc->status_noc == 'noc_4') AND (Auth::user()->peranan == 3 OR Auth::user()->peranan == 4))
                @include('page.noc.import.modal.03SemakUlasan')
            @endif
            @if ($noc->status_noc == 'noc_114')
                @include('page.noc.import.modal.04SediaUlasan')
            @endif
            @if ($noc->status_noc == 'noc_5')
                @include('page.noc.import.modal.05HantarUlasan')
            @endif
            @if ($noc->status_noc == 'noc_6')
                @include('page.noc.import.modal.06SediaMemo')
            @endif
            @if ($noc->status_noc == 'noc_7')
                @include('page.noc.import.modal.07HantarMemo')
            @endif
            @if ($noc->status_noc == 'noc_8')
                @include('page.noc.import.modal.08TerimaMemo')
            @endif
            @if ($noc->status_noc == 'noc_9')
                @include('page.noc.import.modal.09SediaSurat')
            @endif
            @if ($noc->status_noc == 'noc_10')
                @include('page.noc.import.modal.10HantarSurat')
            @endif
            @if ($noc->status_noc == 'noc_11')
                @include('page.noc.import.modal.11TerimaSurat')
            @endif
            @if ($noc->status_noc == 'noc_12')
                @include('page.noc.import.modal.12MohonModul')
            @endif
        </div>
    </div>
</div>
