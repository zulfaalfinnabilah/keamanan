<?php

$panjang = @$_POST['panjang'];
$lebar = @$_POST['lebar'];
$tinggi = @$_POST['tinggi'];
$volume_balok = @$_POST['volume'];
$luas_balok =@$_POST['luas'];

  if(isset($_POST['volume'])){
    $panjang    =$_POST['panjang'];
    $lebar        =$_POST['lebar'];
    $tinggi        =$_POST['tinggi'];
    // menghitung volume balok
    $volume_balok    = $panjang*$lebar*$tinggi;
    }
    if(isset($_POST['luas'])){
      $panjang    =$_POST['panjang'];
      $lebar        =$_POST['lebar'];
      $tinggi        =$_POST['tinggi'];
      // menghitung volume balok
      $luas_balok   = 2*($panjang*$lebar + $panjang*$tinggi + $lebar*$tinggi);
      }
?>



<html>

<head>
<style>
body {
   background-image: url('bgbalok.jpeg');
   background-repeat: no-repeat;
   background-attachment: fixed;
   background-size: 100% 100%;
}
  <title>Tutorial Membuat Script PHP Menghitung Volume Balok</title>
</style>
</head>

<body>
  <center>
  <h2>Form Hitung Volume Balok Dengan PHP</h2>
  <h3>Isi Data:</h3>
  <form action="" method="POST" enctype="multipart/form-data">
    <table>
      <tr>
        <td>Panjang</td>
        <td>:</td>
        <td><input type="text" name="panjang" required value="<?=$panjang?>" onkeypress="return numbers(event)"></td>
      </tr>
      <tr>
        <td>Lebar</td>
        <td>:</td>
        <td><input type="text" name="lebar" required value="<?=$lebar?>" onkeypress="return numbers(event)"></td>
      </tr>
      <tr>
        <td>Tinggi</td>
        <td>:</td>
        <td><input type="text" name="tinggi" required value="<?=$tinggi?>" onkeypress="return numbers(event)"></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td> <button class="btn btn-primary container" name="volume" onkeypress="return numbers(event)">Volume
            Balok</button></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td> <button class="btn btn-primary container" name="luas" onkeypress="return numbers(event)">Luas
            Balok</button></td>
      </tr>
    </table>
  </form>


  <?php 
          echo "Hasil hitung volume balok adalah sebagai berikut:<br />";
          echo "Diketahui;<br />";
          echo "Panjang = $panjang<br />";
          echo "Lebar = $lebar<br />";
          echo "Tinggi = $tinggi<br />";
          echo "<hr width='30%' align='left' >";
          echo "Volume = $volume_balok <br /> "  ;
          echo "Luas = $luas_balok <br /> "  ;
  ?>
  <tr>
    <td></td>
    <td><a href="index.php" role="button">Kembali</a></td>
  </tr>

  <script>
    function numbers(event) {
      var number = (event.which) ? event.which : event.keyCode
      if (number != 46 && number > 31 && (number < 48 || number > 57))
        return false;
      return true;
    }
  </script>
</center>
</body>

</html>