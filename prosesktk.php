<?php
include 'modelktk.php';
if (isset($_POST['submit_simpan'])) {
$mk_id = $_POST['mk_id'];
$nama = $_POST['nama'];$model = new Model();
 $model->insert($mk_id, $nama);
header ('location : indexktk.php');
}
if (isset($_POST['submit_edit'])) {
 $mk_id = $_POST['mk_id'];
 $nama = $_POST['nama'];
 $model = new Model();
 $model->update($mk_id, $nama);
 header('location:indexktk.php');
}
if (isset($_GET['nim'])) {
 $id = $_GET['nim'];
 $model = new Model();
 $model->delete($id);
 header('location:indexktk.php');
}