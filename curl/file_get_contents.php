<?php

// Create a stream
$opts = [
    'http' => [
        'method'=>"GET",
        'header'=>"Accept-language: en\r\n" ."Cookie: foo=bar\r\n"
    ],
    "ssl" => [
        "verify_peer" => false,
        "verify_peer_name" => false,
    ],
];

// Open the file using the HTTP headers set above
$file = file_get_contents('https://www.domain.com', false, stream_context_create($opts));
