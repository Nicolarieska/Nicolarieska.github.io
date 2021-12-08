<html>
    <head>
    </head>
    <body>
        <?php
            include "koneksi.php";
            $username = $_GET['username'];
            $query = "SELECT * FROM username WHERE username='$username' ";
            $result = mysqli_query($connect, $query);
        ?>
        <form method="GET" action="prosesEdit.php">
            <table>
                <?php
                    while($row=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td> Id </td>
                    <td> <input type="text" name="username" value="<?php echo $row['username'];?>"></td>
                </tr>
                <tr>
                    <td> Nama </td>
                    <td> <input type="text" name="nama" value="<?php echo $row['nama'];?>"> </td>
                </tr>
                <tr>
                    <td> Alamat </td>
                    <td> <textarea name="alamat" id="" cols="20" rows="5"><?php echo $row['alamat'];?> </textarea> </td>
                </tr>
                <tr>
                <td> Email </td>
                    <td> <input type="text" name="email" value="<?php echo $row['email'];?>"> </td>
                </tr>
                <tr>
                <td> Nomor HP </td>
                    <td> <input type="text" name="no_hp" value="<?php echo $row['no_hp'];?>"> </td>
                </tr>
                <tr>
                <td> Password </td>
                    <td> <input type="text" name="pass" value="<?php echo $row['pass'];?>"> </td>
                </tr>
                <tr>
                        

                    <td> <input type="submit" name="simpan" value="Simpan"></td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </form>
    </body>
</html>
