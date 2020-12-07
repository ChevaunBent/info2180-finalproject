<?php
if (!isset($_SESSION))
{
  session_start();
}
session_destroy();
header("Location: http://localhost:8080/info2180-finalproject/index.html");
exit;
?>