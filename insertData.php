<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['kasus']) && isset($_POST['keterangan']) &&
     isset($_POST['wilayah'])) {
        
        $kasus = $_POST['kasus'];
        $keterangan = $_POST['keterangan'];
        $wilayah = $_POST['wilayah'];
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "registrasiweb";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
         if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT kasus FROM datacovid WHERE kasus = ? LIMIT 1";
            $Insert = "INSERT INTO datacovid(kasus, keterangan, wilayah) values(?, ?, ?)";
            $stmt = $conn->prepare($Select);
            if($stmt !== FALSE) {
                $stmt->bind_param('s', $keterangan);
                $stmt->execute();
                $stmt->bind_result($resultEmail);
                $stmt->store_result();
                $stmt->fetch();
                $rnum = $stmt->num_rows;
                if ($rnum == 0) {
                    $stmt->close();
                    $stmt = $conn->prepare($Insert);
                    $stmt->bind_param("sss",$kasus, $keterangan, $wilayah);
                    if ($stmt->execute()) {
                        echo "New record inserted sucessfully.";
                        
                    }
                    else {
                        echo $stmt->error;
                    }
                }
                //else {
                    //echo "Someone already registers using this email.";
                //}
                $stmt->close();
                $conn->close();
            }
            }
        }
        else {
            echo "All field are required.";
            die();
        }
    }
    else {
        echo "Submit button is not set";
}
?>