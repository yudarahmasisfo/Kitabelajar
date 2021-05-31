<?php
 $a = 50;
 $b = 20;
 $hasil = $a + $b;
?>
<<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Script php dan elemen form </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
      <form id="form1" name="form1" method="post" action="">
          Masukkan Nilai 

          <input type="text" name="nilai" id="nilai" value=<?php echo $hasil; ?>>
          <input type="submit" name="button" id="button" value="Submit">
      </form>
    </body>
</html>