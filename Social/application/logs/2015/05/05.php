<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-05 10:20:50 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant ‘Exceptionhandler’ - assumed '‘Exceptionhandler’' ~ APPPATH\bootstrap.php [ 164 ] in C:\OpenServer\domains\Social\application\bootstrap.php:164
2015-05-05 10:20:50 --- DEBUG: #0 C:\OpenServer\domains\Social\application\bootstrap.php(164): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\OpenServer\d...', 164, Array)
#1 C:\OpenServer\domains\Social\index.php(102): require('C:\OpenServer\d...')
#2 {main} in C:\OpenServer\domains\Social\application\bootstrap.php:164
2015-05-05 14:15:51 --- CRITICAL: ErrorException [ 2 ]: set_exception_handler() expects the argument (Exceptionhandler::handle) to be a valid callback ~ APPPATH\bootstrap.php [ 165 ] in file:line
2015-05-05 14:15:51 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'set_exception_h...', 'C:\OpenServer\d...', 165, Array)
#1 C:\OpenServer\domains\Social\application\bootstrap.php(165): set_exception_handler(Array)
#2 C:\OpenServer\domains\Social\index.php(102): require('C:\OpenServer\d...')
#3 {main} in file:line