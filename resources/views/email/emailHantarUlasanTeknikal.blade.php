<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>i-NOC Mesej</title>
    <style>
        .tajuk {
            font-family: Metropolis, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            text-align: center;
            font-size: 1rem;
			font-weight: 400;
        }

        table {
            font-family: Metropolis, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            border: 1px solid #dddddd;
            font-size: 1rem;
			font-weight: 400;
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

        p {
            font-family: Metropolis, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            text-align: left;
            font-size: 1rem;
			font-weight: 400;
        }
    </style>
</head>

<body>
    <p class="tajuk"><strong>Sistem i-NOC</strong></p>
    <p>Tuan/Puan,</p>
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
            <th>Urusan</th>
            <td>
                @if ($data->tarikh_hantar_ulasan_tek != null)
                    {{ \Carbon\Carbon::parse($data->tarikh_hantar_ulasan_tek)->format('d-m-Y') }} | Ulasan Teknikal telah dihantar
                @endif
            </td>
        </tr>
        <tr>
            <th>Link</th>
            <td>
                https://www.google.com/
            </td>
        </tr>
        <tr>
            <th>Ulasan</th>
            <td>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </td>
        </tr>

    </table>
    <p>Sekian, terima kasih.</p>
	<p>"BERKHIDMAT UNTUK NEGARA"</p>
	<p><small><i>Nota: E-mel ini dijana secara automatik oleh komputer dan tidak memerlukan tanda tangan.</i></small></p>

</body>

</html>
