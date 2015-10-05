<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-17 09:54:32 --- CRITICAL: Kohana_Exception [ 0 ]: Model must be loaded ~ MODPATH\orm\classes\ORM.php [ 9 ] in C:\OpenServer\domains\Social\application\classes\Controller\avatar.php:28
2015-05-17 09:54:32 --- DEBUG: #0 C:\OpenServer\domains\Social\application\classes\Controller\avatar.php(28): ORM->add_image('\fwmaienn48bxky...', 'avatar')
#1 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Avatar->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Avatar))
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\Social\application\classes\Controller\avatar.php:28
2015-05-17 15:03:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: usercount ~ APPPATH\views\admin\users\list.php [ 15 ] in C:\OpenServer\domains\Social\application\views\admin\users\list.php:15
2015-05-17 15:03:56 --- DEBUG: #0 C:\OpenServer\domains\Social\application\views\admin\users\list.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 15, Array)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\Social\application\views\basic.php(79): Kohana_View->__toString()
#5 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Allusers))
#11 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\Social\application\views\admin\users\list.php:15
2015-05-17 15:12:04 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Searchuser' not found ~ APPPATH\classes\Controller\search.php [ 9 ] in file:line
2015-05-17 15:12:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-17 15:15:56 --- CRITICAL: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ APPPATH\views\admin\users\list.php [ 44 ] in file:line
2015-05-17 15:15:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-17 15:16:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: usercount ~ APPPATH\views\admin\users\list.php [ 18 ] in C:\OpenServer\domains\Social\application\views\admin\users\list.php:18
2015-05-17 15:16:02 --- DEBUG: #0 C:\OpenServer\domains\Social\application\views\admin\users\list.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 18, Array)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\Social\application\views\basic.php(79): Kohana_View->__toString()
#5 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Allusers))
#11 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\Social\application\views\admin\users\list.php:18
2015-05-17 15:16:14 --- CRITICAL: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ APPPATH\views\admin\users\list.php [ 44 ] in file:line
2015-05-17 15:16:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-17 15:16:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: usercount ~ APPPATH\views\admin\users\list.php [ 18 ] in C:\OpenServer\domains\Social\application\views\admin\users\list.php:18
2015-05-17 15:16:40 --- DEBUG: #0 C:\OpenServer\domains\Social\application\views\admin\users\list.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 18, Array)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\Social\application\views\basic.php(79): Kohana_View->__toString()
#5 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Allusers))
#11 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\Social\application\views\admin\users\list.php:18
2015-05-17 15:18:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: usercount ~ APPPATH\views\admin\users\list.php [ 18 ] in C:\OpenServer\domains\Social\application\views\admin\users\list.php:18
2015-05-17 15:18:14 --- DEBUG: #0 C:\OpenServer\domains\Social\application\views\admin\users\list.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 18, Array)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\Social\application\views\basic.php(79): Kohana_View->__toString()
#5 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Allusers))
#11 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\Social\application\views\admin\users\list.php:18
2015-05-17 15:18:17 --- CRITICAL: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ APPPATH\views\admin\users\list.php [ 44 ] in file:line
2015-05-17 15:18:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-17 15:18:48 --- CRITICAL: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ APPPATH\views\admin\users\list.php [ 42 ] in file:line
2015-05-17 15:18:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-17 15:20:03 --- CRITICAL: View_Exception [ 0 ]: The requested view allusers/search could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\OpenServer\domains\Social\system\classes\Kohana\View.php:145
2015-05-17 15:20:03 --- DEBUG: #0 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(145): Kohana_View->set_filename('allusers/search')
#1 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(30): Kohana_View->__construct('allusers/search', Array)
#2 C:\OpenServer\domains\Social\application\classes\Controller\search.php(26): Kohana_View::factory('allusers/search', Array)
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Search->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\Social\system\classes\Kohana\View.php:145
2015-05-17 15:20:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: usercount ~ APPPATH\views\admin\users\list.php [ 17 ] in C:\OpenServer\domains\Social\application\views\admin\users\list.php:17
2015-05-17 15:20:59 --- DEBUG: #0 C:\OpenServer\domains\Social\application\views\admin\users\list.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 17, Array)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\Social\application\views\basic.php(79): Kohana_View->__toString()
#5 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Allusers))
#11 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\Social\application\views\admin\users\list.php:17
2015-05-17 15:21:06 --- CRITICAL: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ APPPATH\views\admin\users\list.php [ 42 ] in file:line
2015-05-17 15:21:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-17 15:21:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: usercount ~ APPPATH\views\admin\users\list.php [ 17 ] in C:\OpenServer\domains\Social\application\views\admin\users\list.php:17
2015-05-17 15:21:39 --- DEBUG: #0 C:\OpenServer\domains\Social\application\views\admin\users\list.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 17, Array)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\Social\application\views\basic.php(79): Kohana_View->__toString()
#5 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Allusers))
#11 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\Social\application\views\admin\users\list.php:17
2015-05-17 15:26:07 --- CRITICAL: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ APPPATH\views\admin\users\list.php [ 43 ] in file:line
2015-05-17 15:26:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-17 15:26:08 --- CRITICAL: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ APPPATH\views\admin\users\list.php [ 43 ] in file:line
2015-05-17 15:26:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-17 15:26:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: items ~ APPPATH\views\admin\users\list.php [ 44 ] in C:\OpenServer\domains\Social\application\views\admin\users\list.php:44
2015-05-17 15:26:40 --- DEBUG: #0 C:\OpenServer\domains\Social\application\views\admin\users\list.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 44, Array)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\Social\application\views\basic.php(79): Kohana_View->__toString()
#5 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Allusers))
#11 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\Social\application\views\admin\users\list.php:44