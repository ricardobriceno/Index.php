<?php
  header( 'Location: ./vam/index.php?lang=en' );
  ini_set('session.save_path',realpath(dirname($_SERVER['DOCUMENT_ROOT']) . '/../session'));
session_start();
  exit();
?>
