<?php
require 'helpers/cors.php';
require 'helpers/response.php';

cors();

$input = json_decode(file_get_contents('php://input'));

if (isset($_GET['delay'])) {
  sleep($_GET['delay']);
}

if (!isset($input->email) || !isset($input->password) || !isset($input->name)) {
  response(
    400,
    "No data sended"
  );
}

if (!filter_var($input->email, FILTER_VALIDATE_EMAIL)) {
  response(
    402,
    "Email is invalid"
  );
} elseif ($input->email === 'user@mail.com') {
  response(
    402,
    "This email is already been used"
  );
} else {
  response(
    200,
    "Sign up successed"
  );
}

