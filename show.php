<?php
include "koneksi.php";
$show=mysqli_query($rumah, "select *from tcuti");
?>
<form action="" method="post">
    <table border="1" cellpadding="6" cellspacing="6">
        <tr>
            <th>NO</th>
            <th>NIK</th>
            <th>NAMA</th>
            <th>JABATAN</th>
            <th>HAK CUTI</th>
			<th>KETERANGAN CUTI</th>
        </tr>
        <?php while($data=mysqli_fetch_array($show)){ ?>
        <tr>
            <td><?php echo $data["NO"];?></td>
            <td><?php echo $data["NIK"];?></td>
            <td><?php echo $data["NAMA"];?></td>
            <td><?php echo $data["JABATAN"];?></td>
            <td><?php echo $data["HAK_CUTI"];?></td>
			<td><?php echo $data["KETERANGAN_CUTI"];?></td> 
            </td>
        </tr>
        <?php  } ?>

    </table>
</form>