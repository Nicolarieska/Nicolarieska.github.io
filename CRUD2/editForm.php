<html>
    <head>
    </head>
    <body>
        <?php
            include "koneksi.php";
            $id = $_GET['id'];
            $query = "SELECT * FROM mahasiswa WHERE id='$id' ";
            $result = mysqli_query($connect, $query);
        ?>
        <form method="GET" action="prosesEdit.php">
            <table>
                <?php
                    while($row=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td> Id </td>
                    <td> <input type="text" name="id" value="<?php echo $row['id'];?>"></td>
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
                    <td> <input type="submit" name="simpan" value="Simpan"></td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </form>
    </body>
</html>
