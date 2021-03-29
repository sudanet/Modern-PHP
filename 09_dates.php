<?php

// Print current date
echo date('y-m-d') . '<br/>';
// Print yesterday
echo date('y-m-d', time() - 60 * 60 * 24);
// Different format: https://www.php.net/manual/en/function.date.php

// Print current timestamp
echo time();
// Parse date: https://www.php.net/manual/en/function.date-parse.php
echo "<pre>";
print_r(date_parse('21-03-20'));
echo "</pre>";
// Parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php
