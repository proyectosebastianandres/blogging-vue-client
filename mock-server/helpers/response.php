<?php

function response ($code, $message) {
  http_response_code($code);

  $response = [
    "status" => $code,
    "message" => $message
  ];

  echo json_encode($response);
}
