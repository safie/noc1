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

		td, th {
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
        <tr>
            <th>Klasifikasi</th>
            <td>{{ $mailData['klasifikasi'] }}</td>
        </tr>
        <tr>
            <th>Tajuk</th>
            <td>{{ $mailData['tajuk'] }}</td>
        </tr>
        <tr>
            <th>Bahagian</th>
            <td>{{ $mailData['bahagian'] }}</td>
        </tr>
        <tr>
            <th>Urusan</th>
            <td>{{ $mailData['urusan'] }}</td>
        </tr>

    </table>

</body>

</html>
