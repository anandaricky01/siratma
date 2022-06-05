<!DOCTYPE html>
<html>
<head>
	<title>Surat Masuk CDK Wilayah Malang</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>

	<table class='table table-bordered'>
		<thead>
			<tr>
				<th colspan="6" class="text-center">
					CDK WILAYAH MALANG DINAS KEHUTANAN PROV JATIM <br>KARTU SURAT MASUK
				</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th>Index</th>
				<td>{{ $suratmasuk->kode_pengarsipan->index }}</td>
				<th>No. Urut</th>
				<td>{{ $suratmasuk->no_urut }}</td>
				<th>Kode</th>
				<td>{{ $suratmasuk->kode_pengarsipan->kode_pengarsipan }}</td>
			</tr>
			<tr>
				<th>No. Surat</th>
				<td>{{$suratmasuk->no_surat}}</td>
				<th>Pengolah</th>
				<td>{{$suratmasuk->pengolah}}</td>
				<th>Lampiran</th>
				<td>{{$suratmasuk->lampiran}}</td>
			</tr>
			<tr>
				<th>Tanggal Surat</th>
				<td>{{$suratmasuk->tanggal_surat}}</td>
				<th>Tanggal Diteruskan</th>
				<td>{{$suratmasuk->tanggal_diteruskan}}</td>
				<th>Tanda Terima</th>
				<td>{{$suratmasuk->tanda_diterima}}</td>
			</tr>
			<tr>
				<th>Dari</th>
				<td colspan="5">{{$suratmasuk->dari_kepada}}</td>
			</tr>
			<tr>
				<th>Isi Ringkas</th>
				<td colspan="5">{{$suratmasuk->isi_ringkas}}</td>
			</tr>
			<tr>
				<th>Catatan</th>
				<td colspan="5">{{$suratmasuk->catatan}}</td>
			</tr>
		</tbody>
	</table>

</body>
</html>