<?php
$pegawi = array("lina", "arni", "jona", "punjabi",
"marcus", "marlin");
echo "<strong>Sebelum diurutkan</strong><br />";
foreach($pegawi as $data => $nama){
    echo "$data: $nama"."<br />";
}
sort($pegawi);

echo "<strong>Setelah diurutkan</strong><br />";
foreach($pegawi as $data => $nama){
    echo "$data: $nama"."<br />";
}
?>