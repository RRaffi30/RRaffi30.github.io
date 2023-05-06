<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kira Yoshikage</title>
	<link rel="stylesheet" href="css.css">

	<style>

#img:hover{
           content: url(mug.jpg);
          }
.a{
   border: 5px;
   border-color:red;
   border-style: solid;
   border-radius: 50px;
   color: white;
   background-color: black;
   padding: 0px;
            
h1{
    color: black;
    font-family: serif;
    text-align: center;
    font-weight: bold;
    }

#r{
    color: blue;
    font-family: serif;
    text-align: right;
    }

#l{
 	color: red;
 	font-family: serif;
    text-align: left;
    }

.php{
    text-align: center;
    }

.c{
  		text-align: center;
	}

.warna{
  		background-color: black;
  		color: white;
	}

	</style>

</head>

<body>
    <br>
    <div class="a">
    <h1 align="center" style="color:white;"><u>Curriculum Vitae</u></h1>

    <P align="center"><img id="img"src="Shinji.jpg" alt="Shinji Ikari"></P>

    <p>Yang bertanda tangan dibawah ini:</p>
    <br>
    <table>
        <tr> 
            <td>Nama</td>
            <td>: Shinji Ikari </td>
        </tr>
        <tr>
            <td>Tempat & Tanggal lahir</td>
            <td>: Tuban, 6 Juni 2001</td>
        </tr>
        <tr>
            <td>Jenis kelamin</td>
            <td>: Laki-laki</td>
        </tr>
        <tr>
            <td>Kewarganegaraan</td>
            <td>: Jepang</td>
        </tr>
        <tr>
            <td>Status</td>
            <td>: Belum Kawin</td>
        </tr>
    </table>

    <h2>Riwayat Pendidikan</h2>
    <ol>
        <li>SD XY Tuban</li>
        <li>SMP YX Jogja</li>
        <li>SMK 2 Semarang</li>
    </ol>

    <h2>Riwayat Pekerjaan</h2>
    <ol>
        <li>PT. NERV Jaya</li>
        <ul><li><a href="https://evangelion.fandom.com/wiki/Evangelion_Unit-01" style="
            color:grey; text-decoration: none;"> Pilot EVA Unit-01</a></li></ul>
    </ol>
</div>

<br><br><hr>
</body>

<body>

<h1>Kira Yoshikage</h1>

<p align="center"><img src="kira.jpg" width="200px"></p>

<p id="r">
	My name is Yoshikage Kira. I’m 33 years old. My house is in the northeast section of Morioh, where all the villas are, and I am not married. I work as an employee for the Kame Yu department stores, and I get home every day by 8 PM at the latest. I don’t smoke, but I occasionally drink. I’m in bed by 11 PM, and make sure I get eight hours of sleep, no matter what. After having a glass of warm milk and doing about twenty minutes of stretches before going to bed, I usually have no problems sleeping until morning. Just like a baby, I wake up without any fatigue or stress in the morning.
</p>

<p id="l">
	I was told there were no issues at my last check-up. I’m trying to explain that I’m a person who wishes to live a very quiet life. I take care not to trouble myself with any enemies, like winning and losing, that would cause me to lose sleep at night. That is how I deal with society, and I know that is what brings me happiness. Although, if I were to fight I wouldn’t lose to anyone.
</p>

<br><br><hr>

<div class="php">
<?php

$burythelight = "<p>
Immortal temptation
Takes over my mind, condemned<br>
Falling weak on my knees<br>
Summon the strength of mayhem<br><br>

I am the storm that is approaching<br>
Provoking black clouds in isolation<br>
I am reclaimer of my name<br>
Born in flames, I have been blessed<br>
My family crest is a demon of death<br>
Forsakened, I am awakened<br>
A phoenix's ash in dark divine<br>
Descending misery<br>
Destiny chasing time<br><br>

Inherit the nightmare, surrounded by fate<br>
Can't run away<br>
Keep walking the line, between the light<br>
Led astray<br><br>

Through vacant halls I won't surrender<br>
The truth revealed in eyes of ember<br>
We fight through fire and ice forever<br>
Two souls once lost, and now they remember<br><br>

I am the storm that is approaching<br>
Provoking black clouds in isolation<br>
I am reclaimer of my name<br>
Born in flames, I have been blessed<br>
My family crest is a demon of death<br>
Forsakened, I am awakened<br>
A phoenix's ash in dark divine<br>
Descending misery<br>
Destiny chasing time<br><br>

Disappear into the night<br>
Lost shadows left behind<br>
Obsession's pulling me<br>
Fading, I've come to take what's mine<br><br>

Lurking in the shadows under veil of night<br>
Constellations of blood pirouette<br>
Dancing through the graves of those who stand at my feet<br>
Dreams of the black throne I keep on repeat<br>
A derelict of dark, summoned from the ashes<br>
The puppet master congregates all the masses<br>
Pulling strings, twisting minds as blades hit<br>
You want this power? Then come try and take it<br><br>

Beyond the tree, fire burns<br>
Secret love, bloodline yearns<br>
Dark minds embrace, crimson joy<br>
Does your dim heart heal or destroy?<br><br>

Bury the light deep within<br>
Cast aside, there's no coming home<br>
We're burning chaos in the wind<br>
Drifting in the ocean all alone<br>
</p>";

echo '<p align="center"><img src="vergil.jpg" width="200px"></p>';
echo $burythelight;

?>
</div>

<br><br><hr>

	<h1>Kalkulator cuy</h1>

	<form action="" method="get">
		<label for="angka">Angka : </label>
		<input type="text" name="angka" id="angka"><br>
		<label for="op">Operator : </label>
		<input type="text" name="op" id="op"><br>
		<label for="angka2">Angka : </label>
		<input type="text" name="angka2" id="angka2"><br>
		<button type="submit" name="submit">Kirim</button>
	</form>

	<?php
		if (isset($_GET["submit"])){
			switch($_GET["op"]) {
				case "+" :
					$hasil = $_GET["angka"] + $_GET["angka2"];
					echo $hasil;
			}
		}
	?>

<br><br><hr>

<table border="1" cellspacing="5" align="center">
<?php for($a=1;$a<=5;$a++){?>
<tr>
<?php for($b=1;$b<=5;$b++){?>
	<td><?= "$a - $b"; ?></td>
<?php } ?>
</tr>
<?php } ?>
</table>

<br><br>

<?php
	$Nama = "Jerry";
	$Hewan = "Rubah";
	if($Hewan == $Hewan){
		echo "$Nama itu $Hewan <br> Ini Benar-benar $Nama ";
	}else{
		echo "Ini Bukan $Nama ";
	}
	
?>

<br><br>

<table border="1" cellspacing="5" align="center">

<?php for($a=1;$a<=5;$a++){ ?>

<?php if($a % 2 == 0){ ?>
	<tr>

<?php } else { ?>
	<tr class="warna">
<?php } ?>

<?php for($b=1;$b<=5;$b++){?>
	<td><?= "$a - $b"; ?></td>
<?php } ?>

</tr>
<?php } ?>

</table>

<br><br><hr>

<?php

$hari = array("Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");

$bulan = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November"];

$TipeData = [1356,"Yee",true];

//menampilkan isi dan informasi array
var_dump($hari);

echo "<br>";

//menampilkan isi array 
print_r($bulan);

echo "<br>";
echo "<br>";

//menambah element/isi array
$bulan[] = "Desember";
print_r($bulan);

echo "<br>";
echo "<br>";

echo $hari[3] . " , 30 " . $bulan[2];

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>


<?php
//PERULANGAN DENGAN ARRAY

$hari1 = ["Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu"];
$bulan1 = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November"];
//menggunakan for

for($i = 0; $i<count($hari1); $i++){
	echo $hari1[$i];
	echo "<br>";
}

echo "<br>";
echo "<br>";

//menggunakan foreach

foreach($bulan1 as $a){
	echo $a;
	echo "<br>";
}

?>

<br><br>

<?php

$siswa = [
		  "Rajendra Raffi Samudra",
		  30,
		  "XI RPL 2",
		  "SMK Negeri 2 Semarang",
		  "notfound404@gmail.com"
		 ]
?>

<ul>
	<?php foreach($siswa as $y){ ?>
		<li> <?php echo $y; ?> </li>
	<?php } ?>
</ul>

<br><br>

<?php
//Array Multi Dimensi

$siswa1 = [
			[
			"Rajendra Raffi Samudra",
			30,
			"XI RPL 2",
			"SMK Negeri 2 Semarang",
			"notfound404@gmail.com"
		    ],
		    [
			"Samudra Raffi Rajendra",
			03,
			"2 RPL XI",
			"SMK 2 Semarang",
			"404notfound@gmail.com"
		    ]
		  ];

echo $siswa1[1][4];


?>

<br><br>


<?php foreach($siswa1 as $y){ ?>
	<ul>
		<li> <?php echo $y[0]; ?> </li>
		<li> <?php echo $y[1]; ?> </li>
		<li> <?php echo $y[2]; ?> </li>
		<li> <?php echo $y[3]; ?> </li>
	</ul>
<?php } ?>

<br><br>

<?php
$siswa2 = [
			[
			"Nama" => "Rajendra Raffi Samudra",
			"NoAbsen" => 30,
			"Kelas" => "XI RPL 2",
			"Sekolah" => "SMK Negeri 2 Semarang",
			"Email" => "notfound404@gmail.com"
		    ],
		    [
			"Nama" => "Samudra Raffi Rajendra",
			"NoAbsen" => 03,
			"Kelas" => "2 RPL XI",
			"Sekolah" => "SMK 2 Semarang",
			"Email" => "404notfound@gmail.com"
		    ]
		  ];
?>

<?php foreach($siswa2 as $y){ ?>
	<ul>
		<li> <?php echo $y["Nama"]; ?> </li>
		<li> <?php echo $y["NoAbsen"]; ?> </li>
		<li> <?php echo $y["Kelas"]; ?> </li>
		<li> <?php echo $y["Sekolah"]; ?> </li>
		<li> <?php echo $y["Email"]; ?> </li>
	</ul>
<?php } ?> 

<br><br><hr>

<ol>
	<li>A</li>
	<li>B</li>
	<li>C</li>
</ol>
<style>
	y{
		spaci: 0mm;
	}
</style>
<P class="y">1. A
	<br>2. B
</P>
<P class="y">2. B</P>
<P class="y">3. C</P>

</body>
</html>