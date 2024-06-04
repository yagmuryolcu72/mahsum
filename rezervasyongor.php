<?php
$baglanti = mysqli_connect("localhost", "root", "", "halısaha");


if (!$baglanti) {
    
}

$sorgu = mysqli_query($baglanti, "SELECT * FROM rezervasyon");

if (mysqli_num_rows($sorgu) > 0) {
   
    echo "<table border='1'>
            <tr>
                <th>Müşteri Seç</th>
                <th>Rezervasyon Tarihi</th>
                <th>Başlangıç Saati</th>
                <th>Bitiş Saati</th>
            </tr>";

   
    while ($satir = mysqli_fetch_assoc($sorgu)) {
        echo "<tr>
                <td>" . $satir["müşteri_seç"]. "</td>
                <td>" . $satir["rezervasyon_tarihi"] . "</td>
                <td>" . $satir["baslangic_saati"]   . "</td>
                <td>" . $satir["bitis_saati"]  . "</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "Tabloda veri bulunamadı.";
}



?>
