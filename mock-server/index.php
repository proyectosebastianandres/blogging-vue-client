<?php
require 'helpers/cors.php';

echo json_encode([
  "version" => 1.0,
  "title" => 'mock server'
]);
