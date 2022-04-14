<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>
        img{
            position: absolute;
            margin-left: 10;
            margin-top: 20;
            width: 13%;
        }

        tr{
            border-style: solid;
            border-width: 10px 0px 0px 0px;
        }
    </style>

    <title>Lembar Disposisi</title>
</head>
<body>
    <header>
        <img src="{{ public_path('img/logo-provinsi-jatim.png') }}" alt="logo-provinsi-jatim">
        <div id="tulisan-header" style="margin-left: 30">
            <center>
                <h2>PEMERINTAH PROVINSI JAWA TIMUR</h2>
                <h2 style="line-height: 10px">DINAS KEHUTANAN</h2>
                <h3 style="line-height: 10px">CABANG DINAS KEHUTANAN WILAYAH MALANG</h3>
                <p style="font-size: 9; line-height: -20px">Jl. Raya Genengan KM. 9,3 Pakisaji. Kotak Pos 17 Kebon Agung Telepon/Fax. (0341)806454</p>
                <h3 style="line-height: 10px"><u>MALANG - 65162</u></h3>
            </center>
        </div>
    </header>

    <div class="content" style="margin-top: 10; margin-left: 20">
        <center><u><strong>LEMBAR DISPOSISI</strong></u></center>
        <table style="margin-top: 20">
            <tr>
                <td>
                    Surat Dari :
                </td>
                <td>
                    {{ $disposisi->dari }}
                </td>
            </tr>
        </table>
    </div>
</body>
</html>