# PHP IMPORT & EXPORT FILE Javascript-like

After php 7.4 release, I am interested in the new feature, the arrow function. This reminds me when using javascript, I use a lot of arrow functions.

Also in javascript can export and import from other files. in php for import of course you can use the require or include function, then how about export, can php do that?

Then I found this article https://mnt.io/2017/10/30/export-functions-in-php-a-la-javascript/ , interesting !

this is the implementation

## Export

Javascript

```
// utils/helpers.js

const multiply = function(a, b){
    return a * b
}

const divide = (a,b) => a / b

export {
    multiply,
    divide
}
```

PHP
```
// utils/helpers.php

$multiply = function($a, $b){
    return $a * $b;
};

$divide = fn($a, $b) => $a / $b;

return compact(
    'multiply',
    'divide'
);
```

## Import
Javascript
```
import * as helpers from './utils/helpers'

import {multiply as mp} from './utils/helpers'

import './utils/helpers'
```

PHP
```
$helpers = require('./utils/helpers.php');

['multiply' => $mp] = require('./utils/helpers.php');

require('./utils/helpers.php);
```

More Explatnation please read:
- https://mnt.io/2017/10/30/export-functions-in-php-a-la-javascript/
- https://www.php.net/manual/en/functions.arrow.php
- https://medium.com/@rifqiazam/spread-operator-arrow-function-fitur-baru-di-php-7-4-20c97d6de10d