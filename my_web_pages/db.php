<?php
session_start();

$mysqli = new mysqli(
  'localhost',
  'root',
  '',
  'crud'
);

// $driver = new mysqli_driver();
// $driver->report_mode = MYSQLI_REPORT_ALL;
if ($mysqli -> connect_errno){
  echo "mame";
}

?>