<?php
$url = "https://w13zvd.api.infobip.com/sms/2/text/advanced";

$headers = array(
  "Authorization: App cff3ef97f55d39fcf4350613b1caafb9-0e5be112-a3d6-413d-8354-a9c13afd5cc8",
  "Content-Type: application/json",
  "Accept: application/json"
);

$data = array(
  "messages" => array(
    array(
      "destinations" => array(
        array("to" => "254703274454"),
        array("to" => "254799912959"),
        array("to" => "254758044335"),
        array("to" => "254114975269"),
        array("to" => "254796796496")
      ),
      "from" => "ServiceSMS",
      "text" => "Anthill travel solutions is offering a mid year sale."
    )
  )
);

$ch = curl_init($url);
curl_setopt_array($ch, array(
  CURLOPT_RETURNTRANSFER => 1,
  CURLOPT_POST => 1,
  CURLOPT_POSTFIELDS => json_encode($data),
  CURLOPT_HTTPHEADER => $headers
));

$response = curl_exec($ch);

if (curl_errno($ch)) {
  echo 'Error:' . curl_error($ch);
} else {
  echo $response; // Display the Infobip API response (optional for debugging)
}

curl_close($ch);
?>