<?php
require_once 'data.php';
var_dump($people);
include 'header.php';
include 'index.php';
require 'config.php';
require 'main.php';
include 'menu.php';





foreach ($people as $key => $person) {
    echo '名前は' . $person['name'] . '<br>';
}
