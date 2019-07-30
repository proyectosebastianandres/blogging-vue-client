<?php

function cors ()
{
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json");
}
