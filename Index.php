<?php

require ('Helpers.php');
require ('Menu.php');
if(empty($_GET['url']))
$_GET['url']='Home';

controller($_GET['url']);

?>