<!DOCTYPE html>
<html lang="en">

<head>
    <title>Latihan 2 Fungsi Hitung </title>
</head>

<body>
    <form method="GET" action="">
        <label for="nama">Nama : </label>
        <input type="text" name="nama"> <br>
        <br>
        <label for="color"> Warna : </label>
        <select name="color" id="">
            <option value="orange">Orange</option>
            <option value="green">Green</option>
            <option value="blue">Blue</option>
            <option value="black">Black</option>
            <option value="red">Red</option>
        </select>
        <br>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_GET['submit'])) {
        $a = $_GET['nama'];
        $b = $_GET['color'];

        function pilihan($nama)
        {
            if (strlen($nama > 20)) {
                return ((strlen($nama)) * 700);
            } elseif (strlen($nama > 11)) {
                return ((strlen($nama)) * 500);
            } else {
                return ((strlen($nama)) * 300);
            }
        }
        echo "<br>";
        echo "<font color='$b'>Nama = $a <br>";
        echo "<font color='$b'>Harga bet untuk nama $a adalah = " . pilihan($a);
    }
    ?>
</body>

</html>