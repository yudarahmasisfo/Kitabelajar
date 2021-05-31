<?php 
 $local ="localhost";
 $username = "root";
 $password = "qwert";
 $koneksi = mysqli_connect($local, $username,$password);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Belajar PHP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <h1>Ini dari file html</h1>
    <?php echo "Ini file dari cetak php"; ?>
    </body>
</html>
<?php mysqli_close($koneksi); ?>