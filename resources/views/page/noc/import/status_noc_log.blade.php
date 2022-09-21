<div class="card card-header-actions mb-2">
    <div class="card-header">
        Status NOC
        <i class="text-muted" data-feather="info" data-bs-toggle="tooltip" data-bs-placement="left"
            title="Sejarah Status NOC"></i>
    </div>
    <div class="card-body">
        <div class="mb-4">
            <table class="table table-sm table-striped table-hover mx-0 my-0 small">
                @if ($noc->status_noc == 'noc_1' or $noc->tarikh_permohonan != null)
                    <tr>
                        <td class="text-center">{{ \Carbon\Carbon::parse($noc->tarikh_permohonan)->format('d.m.Y') }}
                        </td>
                        <td class="bg-primary text-white align-middle" style="--bs-bg-opacity: .90;">NOC Submit</td>
                    </tr>
                @endif
                @foreach ($noc_log as $noc)
                    <tr>
                        <td class="text-center"> {{ \Carbon\Carbon::parse($noc->tarikh)->format('d.m.Y') }}</td>
                        <td class="text-white align-middle {{ $noc->css_class }}" style="--bs-bg-opacity: .90;">
                            {{ $noc->keterangan }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
