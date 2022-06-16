<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>        img{
        position: absolute;
        margin-left: 10;
        margin-top: -1;
        width: 15%;
    }
        table tr td,
		table tr th{
			font-size: 9pt;
		}
    </style>

    <title>Lembar Disposisi</title>
</head>
<body>
    <header>
        <div class="row">
            {{-- <div class="col">
                <img src="{{ public_path('img/logo-provinsi-jatim.png') }}" alt="logo-provinsi-jatim" style="width: 10%" class="img-fluid">
            </div> --}}
            <img src="{{ public_path('img/logo-provinsi-jatim.png') }}" alt="logo-provinsi-jatim" class="img-fluid">
            <div class="col mx-3">
                
                <div class="text-center">
                    {{-- 
                        <center>
                        <h2>PEMERINTAH PROVINSI JAWA TIMUR</h2>
                        <h2 style="line-height: 10px">DINAS KEHUTANAN</h2>
                        <h3 style="line-height: 10px">CABANG DINAS KEHUTANAN WILAYAH MALANG</h3>
                        <p style="font-size: 9; line-height: -20px">Jl. Raya Genengan KM. 9,3 Pakisaji. Kotak Pos 17 Kebon Agung Telepon/Fax. (0341)806454</p>
                        <h3 style="line-height: 10px"><u>MALANG - 65162</u></h3>
                    </center>
                     --}}
                        <h4>PEMERINTAH PROVINSI JAWA TIMUR</h4>
                        <h4>DINAS KEHUTANAN</h4>
                        <h5>CABANG DINAS KEHUTANAN WILAYAH MALANG</h5>
                        <p style="font-size: 11px">Jl. Raya Genengan KM. 9,3 Pakisaji. Kotak Pos 17 Kebon Agung Telepon/Fax. (0341)806454</p>
                        <h5 style="margin-left:-30px"><u>MALANG - 65162</u></h5>
                </div>
            </div>
        </div>
    </header>
    {{-- style="margin-top: 10; margin-left: 20" --}}
    <div class="content mt-4 ms-4">
        <div class="text-center">
            <u><strong>LEMBAR DISPOSISI</strong></u>
        </div>
        <table class='table table-bordered mt-4'>
            <tbody>
                <tr>
                    <th>Surat Dari</th><td>{{ $disposisi->dari }}</td>
                    <th>Diterima Tanggal</th><td>{{ $disposisi->diterima_tanggal }}</td>
                </tr>
                <tr>
                    <th>Tanggal Surat</th><td>{{ $disposisi->tanggal_disposisi }}</td>
                    <th>Nomor Agenda</th><td>{{ $disposisi->no_agenda }}</td>
                </tr>
                <tr>
                    <th>Nomor Surat</th><td>{{ $disposisi->no_surat }}</td>
                    <td rowspan="2" colspan="2"><b>Sifat :</b><br>
                        <div style="background-color: {{ $disposisi->sifat == 1 ? '#000000' : '#' }}; border: 1px solid #17202A; height:20px; margin: 10px 0px; padding: 5px; text-align: center; width:20px;"></div> <p style="position: absolute; margin-left:50px; margin-top:-37px;">Sangat Segera</p>
                        <div style="background-color: {{ $disposisi->sifat == 2 ? '#000000' : '#' }}; border: 1px solid #17202A; height:20px; margin: 10px 0px; padding: 5px; text-align: center; width:20px;"></div> <p style="position: absolute; margin-left:50px; margin-top:-37px;">Segera</p>
                        <div style="background-color: {{ $disposisi->sifat == 3 ? '#000000' : '#' }}; border: 1px solid #17202A; height:20px; margin: 10px 0px; padding: 5px; text-align: center; width:20px;"></div> <p style="position: absolute; margin-left:50px; margin-top:-37px;">Penting</p>
                        <div style="background-color: {{ $disposisi->sifat == 4 ? '#000000' : '#' }}; border: 1px solid #17202A; height:20px; margin: 10px 0px; padding: 5px; text-align: center; width:20px;"></div> <p style="position: absolute; margin-left:50px; margin-top:-37px;">Biasa</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td colspan="4">
                        <b>Perihal : </b><br>
                        {{ $disposisi->perihal }}
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <b>Diteruskan Kepada Sdr :</b><br>
                        <div style="background-color: #; border: 1px solid #17202A; height:20px; margin: 10px 0px; padding: 5px; text-align: center; width:20px;"></div> <p style="position: absolute; margin-left:50px; margin-top:-37px;">Kasubag TU.....................................................</p>
                        <div style="background-color: #; border: 1px solid #17202A; height:20px; margin: 10px 0px; padding: 5px; text-align: center; width:20px;"></div> <p style="position: absolute; margin-left:50px; margin-top:-37px;">Kasi RLPM......................................................</p>
                        <div style="background-color: #; border: 1px solid #17202A; height:20px; margin: 10px 0px; padding: 5px; text-align: center; width:20px;"></div> <p style="position: absolute; margin-left:50px; margin-top:-37px;">Kasi TKUK......................................................</p>
                        <div style="background-color: #; border: 1px solid #17202A; height:20px; margin: 10px 0px; padding: 5px; text-align: center; width:20px;"></div> <p style="position: absolute; margin-left:50px; margin-top:-37px;">...............................................................</p>
                    </td>
                    <td colspan="2">
                        <b>Diteruskan Kepada Sdr :</b><br>
                        <div style="background-color: #; border: 1px solid #17202A; height:20px; margin: 10px 0px; padding: 5px; text-align: center; width:20px;"></div> <p style="position: absolute; margin-left:50px; margin-top:-37px;">Tanggapan dan Saran</p>
                        <div style="background-color: #; border: 1px solid #17202A; height:20px; margin: 10px 0px; padding: 5px; text-align: center; width:20px;"></div> <p style="position: absolute; margin-left:50px; margin-top:-37px;">Proses Lebih Lanjut</p>
                        <div style="background-color: #; border: 1px solid #17202A; height:20px; margin: 10px 0px; padding: 5px; text-align: center; width:20px;"></div> <p style="position: absolute; margin-left:50px; margin-top:-37px;">Koordinasi / Konfirmasi</p>
                        <div style="background-color: #; border: 1px solid #17202A; height:20px; margin: 10px 0px; padding: 5px; text-align: center; width:20px;"></div> <p style="position: absolute; margin-left:50px; margin-top:-37px;">...............................................................</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="text-center"><strong>ISI DISPOSISI</strong></div>
</body>
</html>