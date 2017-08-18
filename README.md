

VS Code and X-Debug Setup guide




	1. gå til https://xdebug.org/wizard.php
	2. i cmd skriv:  php -i
	3. paste cmd outputet til https://xdebug.org/wizard.php
	4. download filen

		1. Move the downloaded file to ext
		2. Edit C:\Program Files (x86)\php\php7\php.ini and add the line
zend_extension = ext\php_xdebug-2.5.4-7.0-vc14-nts.dll



Filen skal se cirka sådan ud:

Tilføj disse linier sidst i din php.ini

[Xdebug]
zend_extension = php_xdebug-2.5.4-7.0-vc14-nts.dll
xdebug.remote_enable = 1
xdebug.remote_autostart = 1
xdebug.remote_handler=dbgp
xdebug.remote_host=localhost
xdebug.remote_port=9000
xdebug.remote_log = C:\Temp\Xdebug_log.txt





	1. Tjek filnavnet
	2. 




https://stackoverflow.com/questions/42307459/variables-are-not-showing-up-in-vscode-xdebug-php/45466595#45466595
Got it working (only tested with php version 7).

	1. Start by downloading the correct xdebug version here: https://xdebug.org/wizard.php

follow the steps..vscode > debug > gear icon > launch.json
{"version": "0.2.0","configurations": [
    {
        "name": "Listen for XDebug",
        "type": "php",
        "request": "launch",
        "port": 9000
          /**
          , "ignore": ["**/vendor/**/*.php"]
          //An optional array of glob patterns that
          // errors should be ignored from (for example **/vendor/**/*.php
          **/
    },
    {

    "name": "Launch currently open script",
    "type": "php",
    "request": "launch",
    "program": "${file}",
    "cwd": "${fileDirname}",
    "port": 9000
    }]}
vscode > File >preferences > settings.json > WORKSPACE SETTINGS
    // Place your settings in this file to overwrite default and user settings.{
      "php.validate.executablePath": "C:\\Program Files (x86)\\php\\php7\\php.exe",
      "php.validate.enable":true}
php.ini add this to end of file (note there is no path slashes in "zend_extension")
[Xdebug]
zend_extension = php_xdebug-2.5.4-7.0-vc14-nts.dll
xdebug.remote_enable = 1
xdebug.remote_autostart = 1
xdebug.remote_handler=dbgp
xdebug.remote_host=localhost
xdebug.remote_port=9000
xdebug.remote_log = C:\Temp\Xdebug_log.txt
also watch this youtube guide:
https://www.youtube.com/watch?v=xME6uHYTcLUFinally, when configuration is done, here is how to get the debugger in vs code to show the variable, watch, callstack:

	1. start webserver
	2. vscode > Click; Start debuggin ( listen for Xdebug)
	3. in Chrome > click RELOAD (this will trigger and start the debugging) Done.



























