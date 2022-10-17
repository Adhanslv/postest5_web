<?php
try{
		$dbh = new PDO ('mysql:host=localhost;
                        dbname=sepeda',
                        "root",
                        "");

		$dbh ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

	catch (PDOException $e){
		print "koneksi Gagal atau Query Bermasalah :" . $e->getMessage() . "<br>";
		die();
}
?>