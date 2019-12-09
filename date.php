<?php
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
echo "<html><head><meta http-equiv='refresh' content='60'><title>Time Log</title></head><body><iframe src='https://destermo.github.io/date.html?str=";
echo generateRandomString(50);
echo "'></iframe></body></html>";
?>
