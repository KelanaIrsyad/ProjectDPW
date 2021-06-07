<link rel="stylesheet" href="style.css">
<div class="kolom">
<h2> Ubah Data Covid-19 </h2>
<?php
  $host = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbName = "registrasiweb";
  $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
  
    $sql=mysqli_query($conn,"select * from datacovid where keterangan='$_GET[kode]'");
    $data=mysqli_fetch_array($sql);
  
?>


<form action="" method="post">
<table>
    <tr>
        <td width="120"> Kasus </td>
        <td> <input type="text" name="kasus" value="<?php echo $data['kasus']; ?>"> </td>
    </tr>
    <tr>
        <td> Keterangan </td>
        <td> <input type="text" name="keterangan" value="<?php echo $data['keterangan']; ?>"> </td>
    </tr>
    <tr>
        <td> Wilayah </td>
        <td> <input type="text" name="wilayah" value="<?php echo $data['wilayah']; ?>"> </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Ubah"> </td>
    </tr>
</table>
        <input type="button" value="Go Back" onclick="history.back(-2)" />

</form>

<?php



if(isset($_POST['proses'])){
mysqli_query($conn, "update datacovid set kasus = '$_POST[kasus]',keterangan = '$_POST[keterangan]', wilayah = '$_POST[wilayah]' where keterangan = '$_GET[kode]'");

echo "Data COVID-19 telah diubah";
echo "<meta http-equiv=refresh content=1;URL='datacovid.php'>";

    }

?>