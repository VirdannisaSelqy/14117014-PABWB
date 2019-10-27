<!DOCTYPE html>
<html>

<head>
    <title>Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href=" css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>


<body>

    <div class="container">
        <h2>
            <center>Form Data Diri </center>
        </h2> <br>
        <form method="POST" action="TM_7hasil.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama">Nama :</label>
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Enter nama">
            </div>

            <div class="form-group">
                <label for="alamat">Alamat :</label>
                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Enter alamat">
            </div>

            <label for="jk" class="mr-5 mt-4 mb-4">Jenis Kelamin : </label> <br>
            <div class="form-check-inline">
                <label class="form-check-label">
                    <input type="radio" name="jk" value="Laki-laki" > Laki-laki &nbsp;&nbsp;
		            <input type="radio" name="jk" value="Perempuan"  >Perempuan
                </label>
            </div> <br> </br>

            <div class="form-group">
                <label for="goldar">Golongan Darah : </label>
                <select class="form-control" name="goldar" id="goldar">
                    <option value="O">O</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option> 
                </select>
            </div> 

            <label for="" class="mr-5 mt-4 ">Hobby : </label>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" value="Badminton" name="hobi[]">Badminton <br>
                    <input type="checkbox" class="form-check-input" value="Volleyball" name="hobi[]">Volleyball <br>
                    <input type="checkbox" class="form-check-input" value="Basketball" name="hobi[]">Basketball <br>
                </label>
            </div> <br>
 
            <div class="form-group">
                <label for="keterangan">Keterangan :</label>
                <textarea type="text" name="keterangan" class="form-control" id="keterangan"></textarea>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">
                Submit
            </button>
        </form>
    </div>



</body>

</html>