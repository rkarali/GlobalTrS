  <?php

  $baslangicFiyati = $_POST['fiyatBaslangic'];
  $bitisFiyati = $_POST['fiyatBitis'];


  $toplam = $fiyatBaslangic + $fiyatBitis;

  /*
  for($i=0; $i<count($veri4);$i++)
  {
	$toplam+=$veri4[$i]->transfercompanysCarCount;
  }

  $veriler = "";
  foreach($veri3 as $row) {
    $veriler += $row->TransferCompanysName + " </br>";
  }
*/
  echo $toplam;
?>