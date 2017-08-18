<?php
//from https://github.com/felixfbecker/vscode-php-debug/tree/master/testproject
//run http://localhost:1234/xdebug.php

echo "Hallo world\n";

//VARIABLES
define('TEST_CONSTANT', 123);
$anArray = array(1, 'test' => 2, 'test2' => ['t' => 123]);
$aFloat = 1.23;
$anInt = 123;
$aString = '123';
$anEmptyString = '';
$aVeryLongString = str_repeat('lol', 1000);
$aBoolean = true;
$nullValue = null;
$variableThatsNotSet;
$aLargeArray = array_fill(0, 100, 'test');
$arrayWithSpaceKey = array('space key' => 1);

// FUNCTIONS
function a_function()
{
    echo 'hello';
    echo 'world';
    echo '!';
}
a_function();

//ERROR
$array = array('hello' => 'world');

// Notice (undefined index)
echo $array['undefined_index'];

// Warning (illegal offset type)
$array[array()] = 123;

// Exception
throw new Exception('this is an exception');