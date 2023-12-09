<html>
<head>
  <title> Calc2.php - programa completo de calculadora </title>
</head>
<body>
  <?php
  $y = isset($_POST["a"])?$_POST["a"] : '';
  $z = isset($_POST["b"])?$_POST["b"] : '';

  if (isset ($_POST['btsuma']))
  {
    $c = $y + $z; echo "$y + $z es:  ". $c;
  }
      if (isset ($_POST['btresta']))
      {
      $c = $y - $z; echo "$y - $z es:  ". $c;
    }
        if (isset ($_POST['btmult']))
      {
        $c = $y * $z; echo "$y * $z es: ". $c;
      }
        if (isset ($_POST['btdiv']))
        {
          if ($z != 0) $c = $y / $z;
          else $c = 0;
          echo " $y / $z es: " . $c;
        }
        ?>

        <form name ="calc" action ="Calc2.php"method="POST">

          A : <input type="text" name = "a" size ="10" value = " <?=$y; ?>" >
            B :<input type="text" name = "b"size ="10" value= "<?=$z;?>" >

            <br>
            <input type="submit" value="Suma" name="btsuma">
              <input type="submit" value="Resta" name="btresta">
                <input type="submit" value="Mult" name="btmult">
                  <input type="submit" value="Division" name="btdiv">

                </form>

              </body>
              </html>
