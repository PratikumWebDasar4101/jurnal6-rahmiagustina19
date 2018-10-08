<?php

require_once("koneksi.php");

?>

<!DOCTYPE html>

<html>

<head>

    <title></title>

    <h1><center>Daftar Tabel</center></h1>

</head>

<body>

    <table width="500px" border="1" align="center">

        <tr align="left">

            <th>Nim</th>

            <th>Nama</th>

            <th>jenis_kelamin</th>
            <th>hobi</th>
            <th>fakultas</th>
            <th>alamat</th>

            <th>Option</th>

        </tr>



        <?php

            $sql = "SELECT * FROM formulir";



            $result = mysqli_query($conn, $sql);

            $row = mysqli_num_rows($result);



            if ($row > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    $nim = $row["nim"];

                    echo "<tr>";

                    echo "<td>" . $row["nama"] . "</td>";

                    echo "<td>" . $row["jenis_kelamin"] . "</td>";

                    echo "<td>" . $row["hobi"] . "</td>";
                    echo "<td>" . $row["fakultas"] . "</td>";
                    echo "<td>" . $row["alamat"] . "</td>";

                    echo "<td>" . "<a href='form_update.php?id=$id'>Edit</a> | <a href='delete.php?id=$id'>Hapus</a>" . "</td>";

                    echo "</tr>";

                }

            }else {

                echo "<tr><td colspan='4' align='center'>0 results.</td></tr>";

            }

        ?>



    </table>

</body>

</html>