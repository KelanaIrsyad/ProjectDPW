<link rel="stylesheet" href="style.css">
<div class="kolom">
<h2>Manage Data Penyebaran COVID-19</h2>
<table border="1">
				<tr>
					<th>No</th>
					<th>Kasus</th>
					<th>Keterangan</th>
					<th>Wilayah</th>
                    <th colspan="2">Aksi</th>
				</tr>



    <?php 
    
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "registrasiweb";
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
    if ($conn->connect_error) {
        die('Could not connect to the database.');
    }
    else{
    
    $no=1;
    $ambildata = mysqli_query($conn, "select * from datacovid");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo"
        <tr>
            <td>$no</td>
            <td>$tampil[kasus]</td>
            <td>$tampil[keterangan]</td>
            <td>$tampil[wilayah]</td>
            <td><a href='?kode=$tampil[keterangan]'> Hapus</a></td>
            <td><a href='dataubah.php?kode=$tampil[keterangan]'> Ubah</a></td>
        </tr>";
        $no++;
    }   
}
?>                
</table>
</div>
<?php 
if(isset($_GET['kode'])){
    mysqli_query($conn, "delete from datacovid where keterangan='$_GET[kode]'");
    echo "Data Telah Terhapus";
    echo "<meta http-equiv=refresh content=2;URL='datacovid.php'";
}
?>
<input type="button" value="Go Back" onclick="history.back(-1)" />