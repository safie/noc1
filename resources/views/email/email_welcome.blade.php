<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Selamat Datang</title>
</head>
<body>
    Selamat datang ke i-NOC,

    Tahniah, anda telah didaftarkan ke sistem i-NOC. Maklumat anda adalah seperti dibawah:
    <table>
        <tr>
            <td>Nama</td>
            <td>{{ $mailData['name'] }}</td>
        </tr>
        <tr>
            <td>Emel</td>
            <td>{{ $mailData['email'] }}</td>
        </tr>
        <tr>
            <td>Peranan</td>
            <td>{{ $mailData['peranan'] }}</td>
        </tr>
        <tr>
            <td>Bahagian</td>
            <td>{{ $mailData['bahagian'] }}</td>
        </tr>
    </table>
</body>
</html>
