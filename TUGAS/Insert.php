<html>
    <head>
        <title>Tambah Data</title>
    </head>
    <body>
        <h1>Tambah Data Mahasiswa</h1>
        <?php
            $NRP = $_POST["NRP"];
            $nama = $_POST["nama"];
            $Foto= $_POST["file_foto"];
            $Jurusan = $_POST["jurusan"];
            $conn=mysqli_connect ("localhost","root","") or die ("koneksi gagal");
            mysqli_select_db($conn,"Mahasiswa");
            $sqlstr="insert into mahasiswa (NRP,Nama,Jurusan,Foto)
            values ('$NRP','$nama','$Jurusan','$Foto')";
            $hasil = mysqli_query($conn,$sqlstr);
            
            if($hasil) {
				      echo "<h3>Simpan data mahasiswa berhasil dilakukan</h3><br>";
			      } else {
			        echo "<h3>Tidak berhasil menambahkan</h3><br>";
            }
            
            mysqli_select_db($conn,"Mahasiswa");
            $hasil=mysqli_query($conn,"select nama from jurusan where ID_Jur='$Jurusan'");
            $row=mysqli_fetch_array($hasil);
            $jurusan=$row[0];
            echo "NRP : $NRP <br>";
            echo "Nama : $nama <br>";
            echo "Foto : $Foto <br>";
            echo "Jurusan : $Jurusan <br>";
        ?>
        <a href="FormData.html">Home</a>
    </body>
</html>