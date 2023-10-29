<?php
/*
 * This script fetches the data from the SmartPost API and saves it to a file.
 * Run this script once a day to keep the data up to date with cron.
 * You can access fetched data file directly from the browser, https://example.com/places.js
 */

$url = "https://www.smartpost.ee/places.js";

// SmartPost API uses an outdated SSL certificate and TLS 1.2, so we need to use this workaround to fetch the data.
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_CIPHER_LIST, 'DEFAULT@SECLEVEL=1');

$response = curl_exec($ch);

if ($response === false) {
    die("Failed to fetch data from $url: " . curl_error($ch));
}

curl_close($ch);

$dataFile = "places.js";

file_put_contents($dataFile, $response);

echo "Data fetched and saved successfully.";
?>
