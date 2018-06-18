<?php
header('Content-type: application/json');

// $respond = ["status" => "OK", "url" => "http://example.com/"];
$respond = ["status" => "FAIL", "errors" => [
    "cell_phone" => ["Incorrect format"],
    "email" => ["Incorrect format", "Fraud value"]
]];

echo json_encode($respond);
