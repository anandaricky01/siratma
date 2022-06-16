<!DOCTYPE html>
<html>
<head>
	<title>Surat Keluar CDK Wilayah Malang</title>
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
					CDK WILAYAH MALANG DINAS KEHUTANAN PROV JATIM <br>KARTU SURAT KELUAR
				</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th>Index</th>
				<td colspan="5">{{ $suratkeluar->kode_pengarsipan->index }}</td>
			</tr>
            <tr>
				<th>No. Urut</th>
				<td>{{ $suratkeluar->no_urut }}</td>
				<th>Kode</th>
				<td>{{ $suratkeluar->kode_pengarsipan->kode_pengarsipan }}</td>
				<th>Tanggal Surat</th>
				<td>{{$suratkeluar->tanggal_surat}}</td>
            </tr>
			<tr>
				<th>Pengolah</th>
				<td colspan="2">{{$suratkeluar->pengolah}}</td>
				<th>Lampiran</th>
				<td colspan="2">{{$suratkeluar->lampiran}}</td>
			</tr>
			<tr>
				<th>Dari</th>
				<td colspan="5">{{$suratkeluar->dari_kepada}}</td>
			</tr>
			<tr>
				<th>Isi Ringkas</th>
				<td colspan="5">{{$suratkeluar->isi_ringkas}}</td>
			</tr>
			<tr>
				<th>Catatan</th>
				<td colspan="5">{{$suratkeluar->catatan}}</td>
			</tr>
		</tbody>
	</table>

</body>
</html>