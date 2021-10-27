<?php
$nama_barang = array("Semen", "Paku", "Batu Kerikil", "Slot Pintu");
$nomor = array(1, 2, 3, 4);
$berat = array(25, 2, 10, 1);
$stok = array(100, 0, 50, 20);
?>

<!DOCTYPE html>
<html style="background-image: linear-gradient(to right, #FFEFD5, #E7E1CA);">

<head>
    <style>
        *{
            font-family: "Lucida Console", "Courier New", monospace;
            color: #342C7A;
        }
        td{
            border-radius:4px;
        }
        td:hover{
            background-color: Ivory;
            transition: .3s;
        }
        th {
            background-color: #12A0CA;
            color: white;
            border-radius:4px; 
        }
        .Table{
            background-color: LightGray;
            border-radius:8px; 
            margin-left: auto; 
            margin-right: auto; 
            margin-top : 10px;
        }
    </style>
    
</head>
<body>

<h1 style="Color:#342C7A; text-align:center; margin-top : 200px;"> Istana Bangunan Pak Joy</h1>

    <table class="Table" border='2' bordercolor= '#000000';>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Berat(kg)</th>
            <th>Berat(g)</th>
            <th>Berat(mg)</th>
            <th>Stok</th>
        </tr>
        <?php for ($i=0; $i < 4; $i++) { ?>
        
        <tr>
            <td> <?php echo $nomor[$i]; ?> </td>
            <td> <?php echo $nama_barang[$i]; ?> </td>
            <td> <?php echo $berat[$i]; ?> </td>
            <td> <?php echo $berat[$i] * 1000; ?> </td>
            <td> <?php echo $berat[$i] * 1000000; ?> </td>
                <?php 
                    if ($stok[$i] == 0 ){
                        echo "<td bgcolor='#FF0000'>kosong</td>";
                        }
                    else{
                        echo "<td>$stok[$i]</td>";
                    }?>
        </tr>
        <?php } ?>   


    </table>
</body>
</html> 
