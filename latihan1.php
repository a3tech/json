<?php
// $mahasiswa = [
//     [
//     "nama" =>"Annas",
//     "nim"=>"16.12.9118"
//     ],
//     [
//         "nama" =>"Wew",
//         "nim"=>"16.12.9118"
//     ]
// ];
$dbh = new PDO('mysql:host=localhost;dbname=zz','root',
'');
$db = $dbh->prepare('select * from admin');
$db->execute();
$admin = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($admin);
echo $data;
?>