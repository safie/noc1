<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>i-NOC Mesej</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>
    <table>
        {{-- <tr>
            <th>Klasifikasi</th>
            <td>{{ $semakan->getKlasifikasi->kod }}</td>
        </tr> --}}
        <tr>
            <th>Tajuk</th>
            <td>{{ $semakan->tajuk_permohonan }}</td>
        </tr>
        {{-- <tr>
            <th>Bahagian</th>
            <td>{{ $semakan->getBahagian->nama_bhgn }}</td>
        </tr>
        <tr>
            <th>Urusan</th>
            <td>{{ $semakan->getStatus->nama_status }}</td>
        </tr> --}}
        {{-- <tr>
            <th>Tarikh Semakan</th>
            <td>{{ Carbon::createFromFormat('d/m/Y', $semakan->tarikh_semak)->format('Y-m-d') }}</td>
        </tr> --}}

    </table>

</body>

</html>
