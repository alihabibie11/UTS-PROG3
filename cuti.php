<?php
include("koneksi.php");
if(isset($_POST['simpan'])){
	$add="insert into TCuti(NIK,NAMA,JABATAN,HAK_CUTI,KETERANGAN_CUTI) values
	('".$_POST['NIK']."',
	 '".$_POST['NAMA']."',
	 '".$_POST['JABATAN']."',
	 '".$_POST['CUTI']."',
	 '".$_POST['KETCUT']."')";
	 $proses_data=mysqli_query($rumah,$add);
	 if ($proses_data){
		 echo ' Tambah data berhasil';
	 } else {
		 echo mysqli_error($rumah);
	 }
}	 
?>
<form method="POST" action="">
<table border="1">
 <tr>
     <td>NIK KARYAWAN </td>
     <td><input name="NIK" type="text"></td>
 </tr>
  <tr>
     <td>NAMA KARYAWAN </td>
     <td><input name="NAMA" type="text"></td>
 </tr>
 <tr>
     <td>JABATAN KARYAWAN </td>
     <td><input name="JABATAN" type="text"></td>
 </tr>
  <tr>
     <td>HAK CUTI KARYAWAN</td>
     <td><input name="CUTI" type="number"></td>
 </tr>
 <td>KETERANGAN CUTI</td>
	<td>
	<select name="KETCUT">
	<option value="Tahunan">Tahunan</option>
	<option value="Nikah">Nikah</option>
	<option value="Melahirkan">Melahirkan</option>
	</td>
	</select>
	</tr>
    <td><input name="simpan" type="submit"></td>
 </tr>
 </table>
 </form>