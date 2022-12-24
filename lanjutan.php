<?php
$nama = "Awan"; 
/*
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
*/

/*
$no = 10;
for($i=0; $i<$no; $i++) {
    $n = $i + 1; 
    echo $n. " "<br/>";
}
*/

/*
$no = 10;
$i = 0;

while ($i < $no) 
{$n = $i + 1;
    echo $n."$nama."<br/>";
    $i++;
}
*/

/*
$no = 10;
$i = 0;
do {
    $n = $i + 1;
    echo $n."$nama."<br/>";
    $i++;
} while ($i < $no)
*/
/*
$data = array('avanza', 'lamborgini', 'tesla', 'xenia', 'xpander', 'rubicon');

$i = 0;
while ($i < count($data)) {
    echo $data[$i]."<br>";
    $i++;
}

//echo $data[5];
/*
foreach($data as $value) {
    echo $value.<br>;
}
*/

// percabangan
/*
if ($nama == "Pangki") {
echo $nama." adalah orang bintan";
} else if($nama == "Awan"){
    echo $nama." Barasal dari jawa barat";
} 
    else {echo $nama." Darimana tuh?  ";
    }
 */

 switch ($nama) {
    case "Pangki":
    $pesan = $nama." adalah orang bintan"; 
    break;
    case "Awan":
    $pesan = $nama." Barasal dari jawa barat";
    break;
    default:
     $pesan = $nama." Darimana tuh?";
    
}
 

?> 