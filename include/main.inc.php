<?php
if (isset($_GET['page'])) {
  $url = "pages/nav/" . $_GET['page'] . ".php";
  if (file_exists($url)) {
    include_once $url;
  } else {
    include_once "pages/notnav/error.php";
  }
} else {
  include_once "pages/notnav/home.php";
}
