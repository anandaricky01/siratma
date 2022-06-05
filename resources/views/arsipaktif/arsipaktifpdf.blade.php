<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Arsip Aktif CDK Wilayah Malang</title>
  </head>
  <body>
    <style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
    <header>
        <h5 class="text-center">Daftar Arsip Aktif</h5>
        <h5 class="text-center">CDK Wilayah Malang</h5>
    </header>

    <div class="content">
        <h6>BULAN {{ strtoupper($namaBulan) }} {{ $tahun }}</h6>
        <table class='table table-bordered'>
            <thead>
                <tr>
                    <th>No</th> 
                    <th>No. Box</th>
                    <th>Kode</th>
                    <th>Indeks</th>
                    <th>Uraian Masalah</th>
                    <th>Tahun</th>
                    <th>Lembar</th>
                    <th>Ket</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($arsipaktif as $arsip)
                <tr>
                    <td>{{ $arsip->no_urut }}</td>
                    <td>{{ $arsip->box }}</td>
                    <td>{{ $arsip->kode_pengarsipan->kode_pengarsipan }}</td>
                    <td>{{ $arsip->kode_pengarsipan->index }}</td>
                    <td>{{ $arsip->isi_ringkas }}</td>
                    <td>{{ $tahun }}</td>
                    <td>{{ $arsip->lampiran }}</td>
                    <td>-</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>