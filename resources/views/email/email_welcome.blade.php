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
			text-align: left;
		}
        table {
            font-family: arial, sans-serif;
            border: 1px solid #000000;
			border-collapse: collapse;
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

		.tajuk {
			text-align: center;
		}

		main {
			display:block;
		}
    </style>
</head>

<body>
	<p class="tajuk"><strong>Sistem i-NOC</strong></p>
	<p>Tuan/Puan,</p>
	<p>Anda telah didaftarkan sebagai pengguna sistem i-NOC</p>

	<main>
		<table>
			<tr>
				<th colspan="2" class="center">Maklumat</th>
			</tr>
			<tr>
				<th>Nama</th>
				<td>{{ $mailData['name'] }}</td>
			</tr>
			<tr>
				<th>Emel</th>
				<td>{{ $mailData['email'] }}</td>
			</tr>
			<tr>
				<th>Bahagian</th>
				<td>{{ $mailData['bahagian'] }}</td>
			</tr>
			<tr>
				<th>Peranan</th>
				<td>{{ $mailData['peranan'] }}</td>
			</tr>
			<tr>
				<th>Kata laluan</th>
				<td>{{ $mailData['katalaluan'] }}</td>
			</tr>

		</table>

        <p>Untuk mengakses masuk sistem, sila layari laman web http://i-noc.epu.gov.my</p>
	</main>

	<p>Sekian, terima kasih.</p>
	<p>"BERKHIDMAT UNTUK NEGARA"</p>
	<p><small><i>Nota: E-mel ini dijana secara automatik oleh komputer dan tidak memerlukan tanda tangan.</i></small></p>
</body>

</html>
