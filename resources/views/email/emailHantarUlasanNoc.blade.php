<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>i-NOC Mesej</title>
    <style>
        p {
            font-family: arial, sans-serif;
            text-align: center;
        }

        table {
            font-family: arial, sans-serif;
            border: 1px solid #dddddd;
            width: 100%;
        }

        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        .head {
            text-align: center;
            color: #F8F8FF;
            background-color: #000000;
        }

        .urusan {
            color: #F8F8FF;
            background-color: #EAE7E6;
        }
    </style>
</head>

<body>
    <p><strong>Sistem i-NOC</strong></p>
    <table>
        <tr>
            <th colspan="2" class="head">Notifikasi</th>
        </tr>
        <tr>
            <th>Klasifikasi</th>
            <td>({{ $data->kod }}) {{ $data->nama_kat }}</td>
        </tr>
        <tr>
            <th>Tajuk</th>
            <td>{{ $data->tajuk_permohonan }}</td>
        </tr>
        <tr>
            <th>Bahagian</th>
            <td>{{ $data->nama_bhgn }}</td>
        </tr>
        <tr>
            <td colspan="2" class="">
                Urusan:<br>
                <ol>
                    @if ($data->status_noc1 = 'noc_18')
                        <li>{{ \Carbon\Carbon::parse($data->tarikh_semak_bajet)->format('d-m-Y') }} |
                            {{ $data->status_noc1 }}</li>
                    @endif
                    @if ($data->tarikh_semak_tek != null)
                        <li>{{ \Carbon\Carbon::parse($data->tarikh_semak_tek)->format('d-m-Y') }} |
                            {{ $data->status_noc2 }}</li>
                    @endif

                </ol>

            </td>
        </tr>

    </table>

</body>

</html>
