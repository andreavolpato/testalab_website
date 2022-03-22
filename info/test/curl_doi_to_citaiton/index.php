<?php
// create a new cURL resource
$ch = curl_init();

$url = "https://doi.org/10.1038/s41587-020-00779-2";
$headers = array(
    "Accept: text/x-bibliography; style=apa",
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$data = curl_exec($ch);

// close cURL resource, and free up system resources
// echo($data);
if (curl_errno($ch)) {
    print "Error: " . curl_error($ch);
} else {
    // Show me the result
    var_dump($data);
    curl_close($ch);
}
?>
