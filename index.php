
<h1>
<font color="red">Sayi Ekleme</font>
</h1>

<form method="post">
  Sayi1:<input type="text" name="sayi1">
  <br /><br />
  Sayi2:<input type="text" name="sayi2">
  <br /><br />
  <input type="submit" name="" value="Sayıları Ekle">
</form>

<?php
include("sqlgiris.php");

if (isset( $_POST["sayi1"] )) {  // VARLIĞI KONTROL EDİLDİ

  // SQL VERİ GİRME
  $SQL = sprintf("
  INSERT INTO `sayilar` (`sayi1`, `sayi2`)
  VALUES ('%s', '%s')",
$_POST["sayi1"], $_POST["sayi2"]);

  // SQL KOMUTUNU ÇALIŞTIR
  $rows  = mysqli_query($db, $SQL);

  echo "<h4>Kayıt eklendi...</h4>";

}
include("sayilarılistele.php");
$KayitSayisi = mysqli_num_rows($rows);
if ($KayitSayisi == 0) {
  echo "<p>Toplam $KayitSayisi kayıt bulundu.</p>";
  // echo "Veri bulunamadı !"; die();
}

?>
