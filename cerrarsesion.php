<?php
session_start();
 unset($_SESSION['pass']);
 session_destroy();
 exit;
?>