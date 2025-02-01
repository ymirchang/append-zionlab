<?php

$_GET['m'] ??= 'home';

if ($_GET['m'] === 'blog'){
  require_once "views/UIBlog.php";
}

else{
require_once "views/UIHome.php";
}


?>