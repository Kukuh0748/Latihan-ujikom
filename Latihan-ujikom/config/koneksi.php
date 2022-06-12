<?php
//membuat kelas koneksi
class koneksi
{
	//membuat fungsi untuk koneksi
	public function get_koneksi()
	{
	//menghubungkan ke database
	$conn = mysqli_connect("localhost","root","","praujikom27");

	//cek koneksi ke database
	if(mysqli_connect_errno()){
	echo "Koneksi database gagal: " . mysqli_connect_error();
		}
		return $conn;
	}
}
//membuat variabel koneksi
$konek = new koneksi();

//memanggil fungsi koneksi
$koneksi = $konek->get_koneksi();
?>