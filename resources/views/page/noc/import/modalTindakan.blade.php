<!-- Modal -->
<div class="modal hide fade" id="modalLulus" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered @if ($noc->status_noc == 'noc_5' or $noc->status_noc2 == 'noc_6') modal-xl @endif" role="document">
        <div class="modal-content">

            @if (Auth::user()->peranan == 2)
                @if ($noc->noc_flow == 'flow1')
                    @if ($noc->status_noc == 'noc_1' or $noc->status_noc == 'noc_17')
                        @include('page.noc.import.modal.01Semak')
                    @endif
                    @if ($noc->status_noc == 'noc_2')
                        @include('page.noc.import.modal.10HantarSurat')
                    @endif
                    @if ($noc->status_noc == 'noc_15')
                        @include('page.noc.import.modal.11MohonModul')
                    @endif
                @elseif ($noc->noc_flow == 'flow2')
                    @if ($noc->status_noc == 'noc_1' or $noc->status_noc == 'noc_17')
                        @include('page.noc.import.modal.01Semak')
                    @endif
                    @if ($noc->status_noc == 'noc_2' or $noc->status_noc == 'noc_18')
                        @include('page.noc.import.modal.02MohonUlasan')
                    @endif
                    @if ($noc->status_noc == 'noc_9')
                        @include('page.noc.import.modal.10HantarSurat')
                    @endif
                    @if ($noc->status_noc == 'noc_15')
                        @include('page.noc.import.modal.11MohonModul')
                    @endif
                @elseif ($noc->noc_flow == 'flow3')
                    @if ($noc->status_noc == 'noc_1' or $noc->status_noc == 'noc_17')
                        @include('page.noc.import.modal.01Semak')
                    @endif
                    @if ($noc->status_noc == 'noc_2')
                        @include('page.noc.import.modal.02MohonUlasan')
                    @endif
                    {{-- @if ($noc->status_noc == 'noc_18')
                        @include('page.noc.import.modal.02MohonUlasanBajet')
                    @endif
                    @if ($noc->status_noc2 == 'noc_19')
                        @include('page.noc.import.modal.02MohonUlasanTeknikal')
                    @endif --}}
                    @if ($noc->status_noc == 'noc_9' and $noc->status_noc2 != 'noc_19')
                        @include('page.noc.import.modal.10HantarSurat')
                    @endif
                    @if ($noc->status_noc == 'noc_15')
                        @include('page.noc.import.modal.11MohonModul')
                    @endif
                @endif
            @elseif (Auth::user()->peranan == 3)
                @if ($noc->noc_flow == 'flow2')
                    @if ($noc->status_noc == 'noc_3')
                        @include('page.noc.import.modal.03SemakUlasan')
                    @endif
                    @if ($noc->status_noc == 'noc_5')
                        @include('page.noc.import.modal.05HantarUlasan')
                    @endif
                @elseif ($noc->noc_flow == 'flow3')
                    @if ($noc->status_noc == 'noc_3')
                        @include('page.noc.import.modal.03SemakUlasan')
                    @endif
                    @if ($noc->status_noc == 'noc_5')
                        @include('page.noc.import.modal.05HantarUlasan')
                    @endif
                @endif
            @elseif (Auth::user()->peranan == 4)
                @if ($noc->noc_flow == 'flow3')
                    @if ($noc->status_noc2 == 'noc_4')
                        @include('page.noc.import.modal.03SemakUlasan')
                    @endif
                    @if ($noc->status_noc2 == 'noc_6')
                        @include('page.noc.import.modal.05HantarUlasan')
                    @endif

                @endif

            @endif

        </div>
    </div>
</div>

@if (Auth::user()->peranan == 2)
    @if ($noc->noc_flow == 'flow3')
        @if ($noc->status_noc == 'noc_18')
            <div class="modal hide fade" id="modalBajet" data-bs-backdrop="static" data-bs-keyboard="false"
                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        @include('page.noc.import.modal.02MohonUlasanBajet')
                    </div>
                </div>
            </div>
        @endif
    @endif
@endif

@if (Auth::user()->peranan == 2)
    @if ($noc->noc_flow == 'flow3')
        @if ($noc->status_noc2 == 'noc_19')
            <div class="modal hide fade" id="modalTeknikal" data-bs-backdrop="static" data-bs-keyboard="false"
                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        @include('page.noc.import.modal.02MohonUlasanTeknikal')
                    </div>
                </div>
            </div>
        @endif
    @endif
@endif
