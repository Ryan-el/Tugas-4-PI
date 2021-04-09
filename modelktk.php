<?php
include 'connection.php';
class Model extends Connection
{
public function __construct()
 {
 $this->conn = $this->get_connection();
 }
 
public function insert($mk_id, $nama)
{
 $sql = "INSERT INTO kontrak_mk (mk_id, nama) VALUES
('$mk_id', '$nama')";
$this->conn->query($sql);
}

public function tampil_data()
{
 $sql = "SELECT * FROM kontrak_mk";
 $bind = $this->conn->query($sql);
 while  ($obj = $bind->fetch_object()) {
 $baris[] = $obj;
 }
 if(!empty($baris)){
 return $baris;
 }
}
public function edit($id)
{
 $sql = "SELECT * FROM kontrak_mk WHERE nim='$id'";
 $bind = $this->conn->query($sql);
 while ($obj = $bind->fetch_object()) {
 $baris = $obj;
 }
 return $baris;
}
public function update($mk_id, $nama)
{
 $sql = "UPDATE kontrak_mk SET mk_id='$mk_id', nama='$nama'
WHERE nim='$nim'";
 $this->conn->query($sql);
} 
public function delete($nim)
{
 $sql = "DELETE FROM kontrak_mk WHERE nim='$nim'";
 $this->conn->query($sql);
}
}
