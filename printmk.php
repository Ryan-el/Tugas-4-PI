<?php
include 'modelmk.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">
<head>
<title>Cetak Matakuliah</title>
<style>
h1 {
text-align: center;
}
table,
td,
th {
border: 1px solid #ddd;
text-align: left;
}
table {
border-collapse: collapse;
width: 100%;
}
th,
td {
padding: 15px;
}
</style>
</head>
<body>
<h1>Laporan Matakuliah</h1>
<table>
<thead>
<tr>
<th>No.</th>
<th>NIM</th>
<th>nama_mk</th>
</tr>
</thead>
<tbody>
<?php
$result = $model->tampil_data();
if ( !empty($result) ) {
foreach ($result as $data): ?>
<tr>
<td><?=$index++ ?></td>
<td><?=$data->nim ?></td>
<td><?=$data->nama_mk ?></td>
</tr>
<?php endforeach;
} else{ ?>
<tr>
<td colspan="9">Belum ada data pada tabel matakuliah.</td>
</tr>
<?php } ?>
</tbody>
</table>
<script>
window.print();
</script>
</body>
</html>