<?php

include("config.php");

if( isset($_GET['id']) ){
	
	// ambil id dari query string
	$id = $_GET['id'];
	
	// buat query hapus
	$sql = "DELETE FROM tbl_kondisi WHERE id_kondisi=$id";
	$query = mysqli_query($db, $sql);
	
	// apakah query hapus berhasil?
	if( $query ){
		$_SESSION['success'] = 'Data kondisi berhasil dihapus';
            echo '<script>window.location="?page=datakondisi"</script>';
	} else {
		$_SESSION['error'] = 'Data kondisi gagal dihapus';
            echo '<script>window.location="?page=datakondisi"</script>';
	}
	
} else {
	die("akses dilarang...");
}

?>
