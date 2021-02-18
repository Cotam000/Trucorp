<?php
    include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trucorp</title>
    <style>
    table {
        width:100%;
        }
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        }
    th, td {
        padding: 15px;
    text-align: left;
        }

</style>
</head>
<body>
    <h1>Trucorp</h1>
    <h3>Data Karyawan</h3>

    <table>
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>KANTOR</th>
        </tr>
        <?php
            $no=1;
            $data = mysqli_query($conn, "SELECT * FROM users");

            while($view = mysqli_fetch_array($data)){
        ?>

        <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $view['nama']; ?></td>
                <td><?php echo $view['kantor']; ?></td>
        </tr>
        <?php
            }
        ?>
    </table>

</body>
</html>
