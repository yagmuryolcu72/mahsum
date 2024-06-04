<html>
<head>
<style>
    <title>Halı Saha Yönetimi</title>


</style>
	</head>


<body background="halisaha.jpeg">

            <a href="sayfa.php">Ana Sayfa</a>
			
           <a href="üyerezervasyonu.php">Üye Girişi</a> 
		   
         <a href="rezervasyongor.php">rezervasyon</a>
		 
         <a href="İletişim.php">İletişim</a>

   <center> <h2>Giriş Yap</h2></center>
   
<form action="login.php" method="POST">
 
        <table align="center">
                <tr>
                    <td>Kullanici Adi</td>
					
                    <td>:</td>
					
                    <td><input type="text" name="kulaniciadi"></td>
					
                </tr>
                <tr>
                    <td>Sifre</td>
					
                    <td>:</td>
					
                    <td><input type="password" name="sifre"></td>
					
                </tr>
                <tr>
				
                    <td></td>
                    <td></td>
					
                    <td><input type="submit" value="Giris"></td>
					
                </tr>
            </table>
</form>
	
    <h1>Halı Saha Müşteri Ekle</h1>
    <form action="sayfa.php" method="post">
	
	Müşteri id: 
        <input type="text" name="musteri_id">
            
        <br>
        ad: <input type="text" name="ad"><br>
        telefon: <input type="text" name="telefon"><br>
        Email: <input type="text" name="email"><br>
        <input type="submit" value="Müşteri Ekle" name="ekle">
		
     </form>

    <hr>
 
  <center> <h3 style="font-size:200%;">Halı Saha Rezervasyon</h3></center>
<center><form action="sayfa2.php" method="post"></center>
 
         <center>Müşteri seç: <input type="text" name="müşteri_seç"></center>
            
  <center>Tarih:<input type="date"  name="rezervasyon_tarih" ></center>
        <br>
<center>Başlangıç Saati:<input type="time" name="baslangic_saati" ></center>
        <br>
      <center>  Bitiş Saati:<input type="time" name="bitis_saati"></center>
        <br>
        <center><input type="submit" name="ekle" value="Ekle"> </center>
    </form>
</body>
</html>


<?php


$baglanti = mysqli_connect("localhost","root","","halısaha");
$sorgu = mysqli_query($baglanti, "SELECT * FROM müşteriler" );



echo "

<table border='1'>
<tr><td>ID</td> <td>İsim</td>   <td>Email</td>          <td>Telefon</td>      </tr>
";

while($satir = mysqli_fetch_assoc($sorgu)){
	
	echo "
	
	
	<tr><td>".$satir["müşteri_id"]."</td> <td>".$satir["ad"]."</td>   <td>".$satir["email"]."</td>          <td>".$satir["telefon"]."</td>      </tr>
	
	
	";
	
	
	
}

echo "</table>";
if (isset($_POST["ekle"]  )){
	
$id = $_POST["musteri_id"];
$ad = $_POST["ad"];
$email = $_POST["email"];
$telefon = $_POST["telefon"];


mysqli_query($baglanti, "INSERT INTO müşteriler VALUES ($id, '$ad', '$email', $telefon)" );


if (mysqli_affected_rows($baglanti)){
	
	echo "kayit basarili";
	die();
	exit();
}
 else {
	 echo "kayit basarisiz";
	 die();
	 exit();
	 
 }
 	
}

?>

