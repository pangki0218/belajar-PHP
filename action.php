<?php


if (isset($_get['p']) && $_get['p'] == 'tampil'){

echo $_post['nama'];
echo "<br/>";
echo $_post['password'];
} 
else if($_get['p'] == "pesan") {
    echo "hallo". $_post ['nama'];
echo "<br/>";
echo "password anda adalah". $_post['password'];
}

else{ 
    echo "anda tidak boleh mengakses halaman ini"
;}

