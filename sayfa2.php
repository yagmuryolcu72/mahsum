<?php


    $müşteri_seç = $_POST["müşteri_seç"];
    $tarih = $_POST["rezervasyon_tarih"];
    $baslangic_saati = $_POST["baslangic_saati"];
    $bitis_saati = $_POST["bitis_saati"];
   
$baglanti = mysqli_connect("localhost", "root","", "halısaha");
  mysqli_query($baglanti,"INSERT INTO rezervasyon (müşteri_seç,rezervasyon_tarihi, baslangic_saati, bitis_saati ) VALUES ('$müşteri_seç','$tarih', '$baslangic_saati', '$bitis_saati' )");

    if (mysqli_affected_rows($baglanti)) {
        echo "Kayit basarili.";
    }
	else {
        echo "Kayit basarisiz.";
    }






















?>







