<?php

$multiply = function($a, $b){
    return $a * $b;
};

$divide = fn($a, $b) => $a / $b;

$create_invoice_number = function($no = 1, $length = 4){
    return sprintf("%'0".$length."d\n", $no); // will produce 0001
};

return compact(
    'multiply',
    'divide',
    'create_invoice_number'
);

// is equal to on javascript
// export {
//   multiply,
//   create_invoice_number
// }