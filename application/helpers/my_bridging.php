<?php

$consId = "21095";
$secretKey = "rsud6778ws122mjkrt";
$kodePpk = "1320R001";

$url_create_bridging_aplicare = "http://new-api.bpjs-kesehatan.go.id/aplicaresws/rest/bed/create/" . $kodePpk;
$url_update_bridging_aplicare = "http://new-api.bpjs-kesehatan.go.id/aplicaresws/rest/bed/update/" . $kodePpk;
$url_delete_bridging_aplicare = "http://new-api.bpjs-kesehatan.go.id/aplicaresws/rest/bed/delete/" . $kodePpk;
$url_read_bridging_aplicare = "http://new-api.bpjs-kesehatan.go.id/aplicaresws/rest/bed/read/" . $kodePpk;


include "config.php";

// Do query's
mysqli_query($con, "SET CHARACTER SET utf8");

mysqli_query($con, "SET NAMES 'utf8'");

$query = mysqli_query($con, "SELECT
                             kodekelas,
                             koderuang,
                             namaruang,
                             kapasitas,
                             tersedia
                           FROM bed_available_bpjs");

// Start of loop process
while ($row = mysqli_fetch_assoc($query)) {
	// create record to JSON
	$data = json_encode($row);

	// Computes the timestamp
	date_default_timezone_set('UTC');
	$tStamp = strval(time() - strtotime('1970-01-01 00:00:00'));
	// Computes the signature by hashing the salt with the secret key as the key
	$signature = hash_hmac('sha256', $consId . "&" . $tStamp, $secretKey, true);
	// base64 encode…
	$encodedSignature = base64_encode($signature);

	$ch = curl_init();
	$headers = array(
		'X-cons-id: ' . $consId . '',
		'X-timestamp: ' . $tStamp . '',
		'X-signature: ' . $encodedSignature . '',
		'Content-Type: Application/JSON',
		'Accept: Application/JSON'
	);


	/*
          Sending record to API Aplicares (for UPDATE)
        */
	curl_setopt($ch, CURLOPT_URL, $url_update_bridging_aplicare);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$content = curl_exec($ch);
	$err = curl_error($ch);

	print_r($err);
	print_r($content);

	// close cURL resource, and free up system resources
	curl_close($ch);
}
    // End of loop process
