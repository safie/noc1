<!-- Modal -->
<div class="modal fade" id="modalLulus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            @if ($noc->status_noc == 'noc_1' or $noc->status_noc == 'noc_17')
                @include('page.noc.import.modal.01Semak')
            @endif
            @if ($noc->status_noc == 'noc_2' or $noc->status_noc == 'noc_18' or $noc->status_noc == 'noc_19')
                @include('page.noc.import.modal.02MohonUlasan')
            @endif
            @if (Auth::user()->peranan == 3 and ($noc->status_noc == 'noc_3' or $noc->status_noc == 'noc_4') or
                Auth::user()->peranan == 4 and $noc->status_noc == 'noc_4')
                @include('page.noc.import.modal.03SemakUlasan')
            @endif
            @if (Auth::user()->peranan == 3 and ($noc->status_noc == 'noc_5' or $noc->status_noc == 'noc_6') or
                Auth::user()->peranan == 4 and $noc->status_noc == 'noc_6')
                @include('page.noc.import.modal.04SediaUlasan')
            @endif
            @if (Auth::user()->peranan == 3 and ($noc->status_noc == 'noc_7' or $noc->status_noc == 'noc_8') or
                Auth::user()->peranan == 4 and $noc->status_noc == 'noc_8')
                @include('page.noc.import.modal.05HantarUlasan')
            @endif
            @if ($noc->status_noc == 'noc_69')
                @include('page.noc.import.modal.06SediaMemo')
            @endif
            @if ($noc->status_noc == 'noc_71')
                @include('page.noc.import.modal.07HantarMemo')
            @endif
            @if ($noc->status_noc == 'noc_81')
                @include('page.noc.import.modal.08TerimaMemo')
            @endif
            @if ($noc->status_noc == 'noc_91')
                @include('page.noc.import.modal.09SediaSurat')
            @endif
            @if ($noc->status_noc == 'noc_101')
                @include('page.noc.import.modal.10HantarSurat')
            @endif
            @if ($noc->status_noc == 'noc_111')
                @include('page.noc.import.modal.11TerimaSurat')
            @endif
            @if ($noc->status_noc == 'noc_121')
                @include('page.noc.import.modal.12MohonModul')
            @endif
        </div>
    </div>
</div>
