<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-30 05:58:14 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, string given, called in C:\OpenServer\domains\Social\application\classes\Controller\main.php on line 9 and defined ~ SYSPATH\classes\Kohana\View.php [ 28 ] in C:\OpenServer\domains\Social\system\classes\Kohana\View.php:28
2015-04-30 05:58:14 --- DEBUG: #0 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\OpenServer\d...', 28, Array)
#1 C:\OpenServer\domains\Social\application\classes\Controller\main.php(9): Kohana_View::factory('home', '$data')
#2 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\Social\system\classes\Kohana\View.php:28
2015-04-30 06:19:08 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in C:\OpenServer\domains\Social\system\classes\Kohana\Cookie.php:67
2015-04-30 06:19:08 --- DEBUG: #0 C:\OpenServer\domains\Social\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 C:\OpenServer\domains\Social\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\OpenServer\domains\Social\system\classes\Kohana\Cookie.php:67
2015-04-30 07:37:05 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/registration could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\OpenServer\domains\Social\system\classes\Kohana\View.php:145
2015-04-30 07:37:05 --- DEBUG: #0 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(145): Kohana_View->set_filename('/pages/registra...')
#1 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/registra...', NULL)
#2 C:\OpenServer\domains\Social\application\classes\Controller\main.php(73): Kohana_View::factory('/pages/registra...')
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Main->action_registration()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\Social\system\classes\Kohana\View.php:145
2015-04-30 07:38:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\basic.php [ 16 ] in C:\OpenServer\domains\Social\application\views\basic.php:16
2015-04-30 07:38:11 --- DEBUG: #0 C:\OpenServer\domains\Social\application\views\basic.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 16, Array)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\Social\application\views\basic.php:16
2015-04-30 07:38:46 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1302
2015-04-30 07:38:46 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 C:\OpenServer\domains\Social\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\OpenServer\domains\Social\application\classes\Controller\main.php(58): Model_Auth_User->create_user(Array, Array)
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Main->action_registration()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1302
2015-04-30 07:39:14 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1302
2015-04-30 07:39:14 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 C:\OpenServer\domains\Social\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\OpenServer\domains\Social\application\classes\Controller\main.php(58): Model_Auth_User->create_user(Array, Array)
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Main->action_registration()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1302
2015-04-30 07:39:22 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1302
2015-04-30 07:39:22 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 C:\OpenServer\domains\Social\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\OpenServer\domains\Social\application\classes\Controller\main.php(58): Model_Auth_User->create_user(Array, Array)
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Main->action_registration()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1302
2015-04-30 07:58:00 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\auth.php [ 16 ] in file:line
2015-04-30 07:58:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-30 08:19:17 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\auth.php [ 16 ] in file:line
2015-04-30 08:19:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-30 08:55:57 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Session_Native as array ~ SYSPATH\classes\Kohana\Session.php [ 245 ] in file:line
2015-04-30 08:55:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-30 08:56:03 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Session_Native as array ~ SYSPATH\classes\Kohana\Session.php [ 245 ] in file:line
2015-04-30 08:56:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-30 08:56:25 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Session_Native as array ~ SYSPATH\classes\Kohana\Session.php [ 245 ] in file:line
2015-04-30 08:56:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-30 08:56:50 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Session_Native as array ~ SYSPATH\classes\Kohana\Session.php [ 245 ] in file:line
2015-04-30 08:56:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-30 09:01:27 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Session_Native as array ~ SYSPATH\classes\Kohana\Session.php [ 280 ] in file:line
2015-04-30 09:01:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-30 09:01:50 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Session_Native as array ~ SYSPATH\classes\Kohana\Session.php [ 245 ] in file:line
2015-04-30 09:01:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-30 09:02:03 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Session_Native as array ~ SYSPATH\classes\Kohana\Session.php [ 245 ] in file:line
2015-04-30 09:02:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-30 09:02:12 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Session_Native as array ~ SYSPATH\classes\Kohana\Session.php [ 245 ] in file:line
2015-04-30 09:02:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-30 09:02:52 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Session_Native as array ~ SYSPATH\classes\Kohana\Session.php [ 245 ] in file:line
2015-04-30 09:02:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-30 09:02:52 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Session_Native as array ~ SYSPATH\classes\Kohana\Session.php [ 245 ] in file:line
2015-04-30 09:02:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-30 09:02:58 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Session_Native as array ~ SYSPATH\classes\Kohana\Session.php [ 245 ] in file:line
2015-04-30 09:02:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-30 09:03:00 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Session_Native as array ~ SYSPATH\classes\Kohana\Session.php [ 245 ] in file:line
2015-04-30 09:03:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-30 09:03:00 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Session_Native as array ~ SYSPATH\classes\Kohana\Session.php [ 245 ] in file:line
2015-04-30 09:03:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-30 09:03:00 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Session_Native as array ~ SYSPATH\classes\Kohana\Session.php [ 245 ] in file:line
2015-04-30 09:03:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-30 09:03:30 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Session_Native as array ~ SYSPATH\classes\Kohana\Session.php [ 245 ] in file:line
2015-04-30 09:03:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line