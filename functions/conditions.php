<?php

function pageVerification($path)
{
  $url = $_SERVER['REQUEST_URI'];
  if ($url === $path)
    return true;
  return false;
}
;