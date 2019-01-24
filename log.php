<?php
require 'login23.inc.php';
session_unset();
session_destroy();
header ('Location:railwayres.html');
?>