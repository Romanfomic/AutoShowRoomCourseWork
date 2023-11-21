<?php
session_start();


require 'includeTemplate.php';
require 'additionalFunctions.php';
require 'getCars.php';

require 'authorization.php';

require 'database/database.php';
require 'database/users.php';

if (isset($_GET['logout']) && $_GET['logout'] === 'yes') {
    logout();
}
