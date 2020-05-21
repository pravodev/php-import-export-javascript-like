<?php

$helpers = require './utils/helpers.php';
// is equal to
// import * as helpers from "utils/helpers"

$helpers['multiply'](5, 2); // 10
$helpers['divide'](10, 5); // 2



['create_invoice_number' => $generate_code] = require './utils/helpers.php';
// is equal to
// import { create_invoice_number as generate_code } from "utils/helpers"

echo $generate_code(12); // result 0012