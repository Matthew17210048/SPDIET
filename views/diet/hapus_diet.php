<?php

include("config.php");

if( isset($_GET['id']) ){
	
	// ambil id dari query string
	$id = $_GET['id'];
	
	// buat query hapus
	$sql = "DELETE FROM tbl_diet WHERE id_diet=$id";
	$query = mysqli_query($db, $sql);
	
	// apakah query hapus berhasil?
	if( $query ){
		$_SESSION['success'] = 'Data Diet berhasil dihapus';
            echo '<script>window.location="?page=datadiet"</script>';
	} else {
		$_SESSION['error'] = 'Data Diet gagal dihapus';
            echo '<script>window.location="?page=datadiet"</script>';
	}
	
} else {
	die("akses dilarang...");
}

?>
