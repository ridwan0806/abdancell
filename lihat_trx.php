<?php
include ('resource.php');
$result = new Abdancell();
$trx = $result->summary_trx();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>No</td>
            <td>Tanggal</td>
            <td>Jml Trx</td>
            <td>Setoran</td>
            <td>Modal</td>
            <td>Laba</td>
        </tr>
        <tr>
            <?php 
                $no = 1;
                foreach($trx as $row){
            ?>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['tanggal']; ?></td>
            <td><?php echo $row['jml_produk_terjual'];?></td>
            <td><?php echo $row['setoran']; ?></td>
            <td><?php echo $row['modal']; ?></td>
            <td><?php echo $row['laba']; ?></td>
        </tr>
        <?php
                }
                ?>
</table>    
</body>
</html>