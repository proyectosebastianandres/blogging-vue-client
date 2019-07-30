<?php
require 'helpers/cors.php';
require 'helpers/response.php';

cors();

$input = json_decode(file_get_contents('php://input'));

if (isset($_GET['delay'])) {
  sleep($_GET['delay']);
}

if (!isset($input->email) || !isset($input->password)) {
  response(
    400,
    "No data sended"
  );
}

if ($input->email != 'user@mail.com' || $input->password != 'pass') {
  response(
    403,
    "Email or password are wrong"
  );
} else {
  response(
    200,
    "Go to login"
  );
}
