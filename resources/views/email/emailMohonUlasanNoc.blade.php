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

        .center {
            text-align: center;
            color: #F8F8FF;
            background-color: #000000;
        }
    </style>
</head>

<body>
    <p><strong>Sistem i-NOC</strong></p>
    <table>
        <tr>
            <th colspan="2" class="center">Notifikasi</th>
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
            <th rowspan="2">Urusan</th>
            <td>{{ \Carbon\Carbon::parse($data->tarikh_mohon_ulasan)->format('d-m-Y') }} | {{ $data->status_noc1 }}</td>
            @if ($data->tarikh_mohon_ulasan_tek != null)
        </tr>
        <tr>
            <td>{{ \Carbon\Carbon::parse($data->tarikh_mohon_ulasan_tek)->format('d-m-Y') }} | {{ $data->status_noc2 }}
            </td>
            @endif
        </tr>

    </table>

</body>

</html>
