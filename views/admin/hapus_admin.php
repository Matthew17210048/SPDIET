<?php

include("config.php");

if( isset($_GET['id']) ){
	
	// ambil id dari query string
	$id = $_GET['id'];
	
	// buat query hapus
	$sql = "DELETE FROM tbl_admin WHERE id_admin=$id";
	$query = mysqli_query($db, $sql);
	
	// apakah query hapus berhasil?
	if( $query ){
		$_SESSION['success'] = 'Data Admin berhasil dihapus';
            echo '<script>window.location="?page=data_admin"</script>';
	} else {
		$_SESSION['error'] = 'Data Admin gagal dihapus';
            echo '<script>window.location="?page=data_admin"</script>';
	}
	
} else {
	die("akses dilarang...");
}

?>
