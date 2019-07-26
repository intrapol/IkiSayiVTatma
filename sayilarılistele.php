<?php
$TabloBasi = "
<table border=1 cellspacing=0 cellpadding=5>
<tr>
  <td>sayi1</td>
  <td>sayi2</td>

</tr>
";
$TabloSonu = "</table>";

if( isset( $_GET["sayi1"]))
{ // Şehir seçimi yapılmış

      echo "<h1>$SEHIR SAYI SONUÇLARI</h1>";
      echo $TabloBasi;

      while($row = mysqli_fetch_assoc($rows))
      {

          echo sprintf("
                <tr>
                  <td>%s</td>
                  <td>%s</td>
                      </tr>",
                $row["sayi1"],
                $row["sayi2"]
              );

      } // while sonu

      echo $TabloSonu;
    }
?>
