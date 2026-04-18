<?php
header("Content-Type: text/plain");
header("Access-Control-Allow-Origin: *");

$id = $_POST['id'] ?? '';
$device = $_POST['var'] ?? '';
$taps = $_POST['taps'] ?? '';

if ($id === '' || $device === '' || $taps === '') {
    echo "Missing data";
    exit;
}

$line = "ID: " . $id . " | Device: " . $device . " | Taps: " . $taps . PHP_EOL;
file_put_contents("tap_logs.txt", $line, FILE_APPEND);

echo "Data saved successfully";
?>
