<?php
/**
 * Cleanse HTML going in or coming out of the database
 */
function in($data) {
  $data = strip_tags($data);
  $data = stripslashes($data);
  return trim(htmlentities($data, ENT_QUOTES, 'UTF-8'));
}
function out($data) {
  return trim(htmlentities($data, ENT_QUOTES, 'UTF-8'));
}
// var_Dump and Die for troubleshooting
function dnd($data) {
  echo '<pre>';
  var_dump($data);
  echo '</pre>';
  die();
}
