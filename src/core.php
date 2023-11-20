<?php
session_start();


require 'includeTemplate.php';
require 'additionalFunctions.php';
require 'getCars.php';

require 'authorization.php';

if (isset($_GET['logout']) && $_GET['logout'] === 'yes') {
    logout();
}
