STDOUT, output 1
<?php
echo 'stdout output 2';
error_log('sterr output 1');
error_log('sterr output 2');

$var1 = 1;
$var2 = 2;

print $var1 + $var2;

function test($id) {
    return (
        is_numeric($id) &&
        ((string)(int)$id === $id) &&
        (int)$id > 0
    );}

var_dump( test(1)            ); // returns false vs TRUE
var_dump( test('1')          ); // returns TRUE
var_dump( test('1.0')        ); // returns false vs TRUE
var_dump( test('1.1')        ); // returns false
var_dump( test('0xFF')        ); // returns false
var_dump( test('0123')        ); // returns false vs TRUE
var_dump( test('-0123')      ); // returns false vs TRUE
var_dump( test('-1000000')    ); // returns TRUE
var_dump( test('+1000000')    ); // returns false vs TRUE
var_dump( test('2147483648')  ); // returns false
var_dump( test('-2147483649') ); // returns false
var_dump( test('true') ); // returns false
var_dump( test('false') ); // returns false
var_dump( test(true) ); // returns false
var_dump( test(false) ); // returns false
var_dump( test('0') ); // returns false
var_dump( test(0) ); // returns false
var_dump( test(array()) ); // returns false
var_dump( test(null) ); // returns false
var_dump( test('') ); // returns false
var_dump( test('!!1') ); // returns false
var_dump( test(!'1\a') ); // returns false
var_dump( test('1\\/*\\\\///\\/\\//\\\/\/""/a') ); // returns false
