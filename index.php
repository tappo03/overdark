<?php

require_once ('src/api/request.php');

use overdark\api\request;

$over_dark = new request('it','',true);
echo '<pre>';
print_r ($over_dark->get_profile ('0pl'));
echo '</pre>';