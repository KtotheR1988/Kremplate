<?php
$dir = "pages/nav/";
$pages = array_values(array_diff(scandir($dir), array('..', '.')));
$max = max(array_keys($pages));
for ($i=0; $i <= $max; $i++) {
  $page = str_replace(".php", "", $pages[$i]);
  echo '<a class="nav-item nav-link" href="index.php?page=' . $page . '">' . ucfirst($page) . '</a>';
}
