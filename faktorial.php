<!DOCTYPE html>
<html>
<head>
<title>Factorial</title>
</head>

<body>
<form name="frm01" method="post">
<table>
    <tr>
    <td>Masukkan Angka</td>
    <td><input type="text" name="txtNilai" size="5"/></td>
    </tr>
        <tr>
        <td colspan="2"><input type="submit" name="hasil" value="Hitung"/></td>
        </tr>
</table>

<?php
error_reporting(0);
if($_POST['hasil']!=''){
            $angka=$_POST['txtNilai'];
           
            function faktorial($angka){
            if($angka<=1){
                        $hasil=1;
                        return $hasil; 
            }elseif($angka>1){
                        for($i=1; $i<=$angka; $i++){
                             $hasil=$angka * faktorial($angka-1);
                        }
                        return $hasil;
            }
}
echo "<br>";
    echo "Angka :".$angka."<br>";
    echo "Faktorial dari "." ".$angka." "."adalah :"." ".faktorial($angka);
}
?>
</form>
</body>
</html>