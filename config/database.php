<?php

    $host = "localhost:3307";
    $user = "root";
    $pass = "";
    $dbas = "";
    $conn = mysqli_connect($host, $user, $pass, $dbas);

    if (!$conn) {
        die("<script>
                alert('Gagal Tersambung Dengan Database.');
             </script>
        ");
    }

?>