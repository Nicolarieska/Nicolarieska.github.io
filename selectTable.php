<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
    <body>
        <table>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Email</th>

            </tr>
            <?php
                include "koneksi.php";

                $query = "SELECT * FROM anggota";
                $result = mysqli_query($connect , $query);

                if (mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td> <?php echo $row["username"] ?></td>
                <td> <?php echo $row["nama"] ?></td>
                <td> <?php echo $row["alamat"] ?></td>
                <td> <?php echo $row["email"] ?></td>
                <td> <?php echo $row["no_hp"] ?></td>
                <td> <?php echo $row["pass"] ?></td>

            <?php
                    }
                }
                else{
                    echo "0 result";
                }
            ?>
            </tr>
        </table>
    </body>
</html>