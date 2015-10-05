<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-22 14:01:22 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\mycontroller.php [ 10 ] in C:\OpenServer\domains\Social\application\classes\mycontroller.php:10
2015-05-22 14:01:22 --- DEBUG: #0 C:\OpenServer\domains\Social\application\classes\mycontroller.php(10): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\OpenServer\d...', 10, Array)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(69): Mycontroller->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\Social\application\classes\mycontroller.php:10
2015-05-22 17:23:50 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\OpenServer\domains\Social\system\classes\Kohana\View.php:145
2015-05-22 17:23:50 --- DEBUG: #0 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\OpenServer\domains\Social\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\Social\system\classes\Kohana\View.php:145
2015-05-22 17:23:51 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\OpenServer\domains\Social\system\classes\Kohana\View.php:145
2015-05-22 17:23:51 --- DEBUG: #0 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\OpenServer\domains\Social\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\Social\system\classes\Kohana\View.php:145