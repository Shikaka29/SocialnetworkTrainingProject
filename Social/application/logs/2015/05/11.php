<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-11 09:05:27 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1302
2015-05-11 09:05:27 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 C:\OpenServer\domains\Social\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(53): Model_Auth_User->create_user(Array, Array)
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_registration()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1302
2015-05-11 09:06:50 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1302
2015-05-11 09:06:50 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 C:\OpenServer\domains\Social\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(53): Model_Auth_User->create_user(Array, Array)
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_registration()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1302
2015-05-11 09:17:32 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1302
2015-05-11 09:17:32 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 C:\OpenServer\domains\Social\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(54): Model_Auth_User->create_user(Array, Array)
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_registration()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1302
2015-05-11 09:22:54 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1302
2015-05-11 09:22:54 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 C:\OpenServer\domains\Social\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(54): Model_Auth_User->create_user(Array, Array)
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_registration()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1302
2015-05-11 09:38:04 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_Register::$errors ~ APPPATH\classes\Controller\auth.php [ 83 ] in C:\OpenServer\domains\Social\application\classes\Controller\auth.php:83
2015-05-11 09:38:04 --- DEBUG: #0 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(83): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 83, Array)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\Social\application\classes\Controller\auth.php:83
2015-05-11 09:46:56 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1302
2015-05-11 09:46:56 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 C:\OpenServer\domains\Social\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(55): Model_Auth_User->create_user(Array, Array)
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_registration()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1302
2015-05-11 09:47:00 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1302
2015-05-11 09:47:00 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 C:\OpenServer\domains\Social\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(55): Model_Auth_User->create_user(Array, Array)
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_registration()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1302
2015-05-11 09:47:06 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1302
2015-05-11 09:47:06 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 C:\OpenServer\domains\Social\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(55): Model_Auth_User->create_user(Array, Array)
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_registration()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1302
2015-05-11 09:47:31 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1302
2015-05-11 09:47:31 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 C:\OpenServer\domains\Social\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(55): Model_Auth_User->create_user(Array, Array)
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_registration()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1302
2015-05-11 09:47:34 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1302
2015-05-11 09:47:34 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 C:\OpenServer\domains\Social\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(55): Model_Auth_User->create_user(Array, Array)
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_registration()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1302
2015-05-11 09:47:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_CATCH ~ APPPATH\classes\Controller\auth.php [ 71 ] in file:line
2015-05-11 09:47:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-11 10:02:47 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_Register::$errors ~ APPPATH\classes\Controller\auth.php [ 73 ] in C:\OpenServer\domains\Social\application\classes\Controller\auth.php:73
2015-05-11 10:02:47 --- DEBUG: #0 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(73): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 73, Array)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\Social\application\classes\Controller\auth.php:73
2015-05-11 10:09:59 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::type() must be an array, null given ~ SYSPATH\classes\Kohana\Upload.php [ 146 ] in C:\OpenServer\domains\Social\system\classes\Kohana\Upload.php:146
2015-05-11 10:09:59 --- DEBUG: #0 C:\OpenServer\domains\Social\system\classes\Kohana\Upload.php(146): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\OpenServer\d...', 146, Array)
#1 [internal function]: Kohana_Upload::type(NULL, Array)
#2 C:\OpenServer\domains\Social\system\classes\Kohana\Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#3 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(91): Kohana_Validation->check()
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_registration()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\Social\system\classes\Kohana\Upload.php:146
2015-05-11 10:42:20 --- CRITICAL: ErrorException [ 1 ]: Class 'Captcha' not found ~ APPPATH\classes\Controller\auth.php [ 92 ] in file:line
2015-05-11 10:42:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-11 10:42:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\basic.php [ 24 ] in C:\OpenServer\domains\Social\application\views\basic.php:24
2015-05-11 10:42:34 --- DEBUG: #0 C:\OpenServer\domains\Social\application\views\basic.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 24, Array)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\Social\application\views\basic.php:24
2015-05-11 10:43:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\basic.php [ 24 ] in C:\OpenServer\domains\Social\application\views\basic.php:24
2015-05-11 10:43:08 --- DEBUG: #0 C:\OpenServer\domains\Social\application\views\basic.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 24, Array)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\Social\application\views\basic.php:24
2015-05-11 10:43:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\basic.php [ 24 ] in C:\OpenServer\domains\Social\application\views\basic.php:24
2015-05-11 10:43:09 --- DEBUG: #0 C:\OpenServer\domains\Social\application\views\basic.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 24, Array)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\Social\application\views\basic.php:24
2015-05-11 10:43:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\basic.php [ 24 ] in C:\OpenServer\domains\Social\application\views\basic.php:24
2015-05-11 10:43:16 --- DEBUG: #0 C:\OpenServer\domains\Social\application\views\basic.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 24, Array)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\Social\application\views\basic.php:24
2015-05-11 10:43:38 --- CRITICAL: ErrorException [ 8 ]: Undefined index: captcha ~ APPPATH\classes\Controller\auth.php [ 53 ] in C:\OpenServer\domains\Social\application\classes\Controller\auth.php:53
2015-05-11 10:43:38 --- DEBUG: #0 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(53): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 53, Array)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_register()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\Social\application\classes\Controller\auth.php:53
2015-05-11 11:02:23 --- CRITICAL: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [] does not comply with RFC 2822, 3.6.2. ~ MODPATH\email\vendor\swiftmailer\lib\classes\Swift\Mime\Headers\MailboxHeader.php [ 348 ] in C:\OpenServer\domains\Social\modules\email\vendor\swiftmailer\lib\classes\Swift\Mime\Headers\MailboxHeader.php:263
2015-05-11 11:02:23 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\email\vendor\swiftmailer\lib\classes\Swift\Mime\Headers\MailboxHeader.php(263): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('')
#1 C:\OpenServer\domains\Social\modules\email\vendor\swiftmailer\lib\classes\Swift\Mime\Headers\MailboxHeader.php(106): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 C:\OpenServer\domains\Social\modules\email\vendor\swiftmailer\lib\classes\Swift\Mime\Headers\MailboxHeader.php(63): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 C:\OpenServer\domains\Social\modules\email\vendor\swiftmailer\lib\classes\Swift\Mime\SimpleHeaderFactory.php(58): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 C:\OpenServer\domains\Social\modules\email\vendor\swiftmailer\lib\classes\Swift\Mime\SimpleHeaderSet.php(68): Swift_Mime_SimpleHeaderFactory->createMailboxHeader('To', Array)
#5 C:\OpenServer\domains\Social\modules\email\vendor\swiftmailer\lib\classes\Swift\Mime\SimpleMessage.php(323): Swift_Mime_SimpleHeaderSet->addMailboxHeader('To', Array)
#6 C:\OpenServer\domains\Social\modules\email\vendor\swiftmailer\lib\classes\Swift\Mime\SimpleMessage.php(299): Swift_Mime_SimpleMessage->setTo(Array)
#7 [internal function]: Swift_Mime_SimpleMessage->addTo('', NULL)
#8 C:\OpenServer\domains\Social\modules\email\classes\Kohana\Email.php(225): call_user_func(Array, '', NULL)
#9 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(72): Kohana_Email->to('')
#10 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_registration()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#13 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#16 {main} in C:\OpenServer\domains\Social\modules\email\vendor\swiftmailer\lib\classes\Swift\Mime\Headers\MailboxHeader.php:263
2015-05-11 11:02:33 --- CRITICAL: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [] does not comply with RFC 2822, 3.6.2. ~ MODPATH\email\vendor\swiftmailer\lib\classes\Swift\Mime\Headers\MailboxHeader.php [ 348 ] in C:\OpenServer\domains\Social\modules\email\vendor\swiftmailer\lib\classes\Swift\Mime\Headers\MailboxHeader.php:263
2015-05-11 11:02:33 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\email\vendor\swiftmailer\lib\classes\Swift\Mime\Headers\MailboxHeader.php(263): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('')
#1 C:\OpenServer\domains\Social\modules\email\vendor\swiftmailer\lib\classes\Swift\Mime\Headers\MailboxHeader.php(106): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 C:\OpenServer\domains\Social\modules\email\vendor\swiftmailer\lib\classes\Swift\Mime\Headers\MailboxHeader.php(63): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 C:\OpenServer\domains\Social\modules\email\vendor\swiftmailer\lib\classes\Swift\Mime\SimpleHeaderFactory.php(58): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 C:\OpenServer\domains\Social\modules\email\vendor\swiftmailer\lib\classes\Swift\Mime\SimpleHeaderSet.php(68): Swift_Mime_SimpleHeaderFactory->createMailboxHeader('To', Array)
#5 C:\OpenServer\domains\Social\modules\email\vendor\swiftmailer\lib\classes\Swift\Mime\SimpleMessage.php(323): Swift_Mime_SimpleHeaderSet->addMailboxHeader('To', Array)
#6 C:\OpenServer\domains\Social\modules\email\vendor\swiftmailer\lib\classes\Swift\Mime\SimpleMessage.php(299): Swift_Mime_SimpleMessage->setTo(Array)
#7 [internal function]: Swift_Mime_SimpleMessage->addTo('', NULL)
#8 C:\OpenServer\domains\Social\modules\email\classes\Kohana\Email.php(225): call_user_func(Array, '', NULL)
#9 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(72): Kohana_Email->to('')
#10 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_registration()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#13 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#16 {main} in C:\OpenServer\domains\Social\modules\email\vendor\swiftmailer\lib\classes\Swift\Mime\Headers\MailboxHeader.php:263
2015-05-11 11:03:15 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH\classes\Controller\auth.php [ 56 ] in file:line
2015-05-11 11:03:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-11 11:03:40 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH\classes\Controller\auth.php [ 56 ] in file:line
2015-05-11 11:03:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-11 11:03:50 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH\classes\Controller\auth.php [ 56 ] in file:line
2015-05-11 11:03:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-11 11:04:19 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH\classes\Controller\auth.php [ 56 ] in file:line
2015-05-11 11:04:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-11 11:04:25 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH\classes\Controller\auth.php [ 56 ] in file:line
2015-05-11 11:04:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-11 11:04:39 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH\classes\Controller\auth.php [ 56 ] in file:line
2015-05-11 11:04:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-11 11:04:58 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH\classes\Controller\auth.php [ 56 ] in file:line
2015-05-11 11:04:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-11 11:05:06 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH\classes\Controller\auth.php [ 56 ] in file:line
2015-05-11 11:05:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-11 11:05:49 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH\classes\Controller\auth.php [ 53 ] in file:line
2015-05-11 11:05:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-11 11:06:16 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH\classes\Controller\auth.php [ 54 ] in file:line
2015-05-11 11:06:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-11 11:06:32 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH\classes\Controller\auth.php [ 54 ] in file:line
2015-05-11 11:06:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-11 11:08:00 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH\classes\Controller\auth.php [ 55 ] in file:line
2015-05-11 11:08:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-11 11:11:48 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH\classes\Controller\auth.php [ 55 ] in file:line
2015-05-11 11:11:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-11 11:13:59 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH\classes\Controller\auth.php [ 55 ] in file:line
2015-05-11 11:13:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-11 11:14:23 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH\classes\Controller\auth.php [ 55 ] in file:line
2015-05-11 11:14:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-11 11:15:53 --- CRITICAL: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH\orm\classes\Kohana\ORM.php [ 1567 ] in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1567
2015-05-11 11:15:53 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 1567, Array)
#1 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(97): Kohana_ORM->add('roles', Object(Model_Role))
#2 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_reg()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1567
2015-05-11 11:18:26 --- CRITICAL: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH\orm\classes\Kohana\ORM.php [ 1567 ] in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1567
2015-05-11 11:18:26 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 1567, Array)
#1 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(97): Kohana_ORM->add('roles', Object(Model_Role))
#2 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_reg()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1567
2015-05-11 11:19:22 --- CRITICAL: Database_Exception [ 1146 ]: Table 'socialdb.myusers' doesn't exist [ SHOW FULL COLUMNS FROM `myusers` ] ~ MODPATH\database\classes\Database\MySQLi.php [ 174 ] in C:\OpenServer\domains\Social\modules\database\classes\Database\MySQLi.php:338
2015-05-11 11:19:22 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\database\classes\Database\MySQLi.php(338): Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1668): Database_MySQLi->list_columns('myusers')
#2 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\OpenServer\domains\Social\application\classes\Model\register.php(9): Kohana_ORM->__construct()
#6 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(94): Model_Register->reg('Valknutx', 'Valknut29@mail....', '')
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_reg()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#10 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#13 {main} in C:\OpenServer\domains\Social\modules\database\classes\Database\MySQLi.php:338
2015-05-11 11:20:42 --- CRITICAL: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH\orm\classes\Kohana\ORM.php [ 1567 ] in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1567
2015-05-11 11:20:42 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 1567, Array)
#1 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(97): Kohana_ORM->add('roles', Object(Model_Role))
#2 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_reg()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1567
2015-05-11 11:22:11 --- CRITICAL: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH\database\classes\Database\MySQLi.php [ 174 ] in C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php:251
2015-05-11 11:22:11 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `ro...', false, Array)
#1 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(97): Kohana_ORM->add('roles', Object(Model_Role))
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_reg()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php:251
2015-05-11 11:22:48 --- CRITICAL: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH\database\classes\Database\MySQLi.php [ 174 ] in C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php:251
2015-05-11 11:22:48 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `ro...', false, Array)
#1 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(97): Kohana_ORM->add('roles', Object(Model_Role))
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_reg()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php:251
2015-05-11 11:27:33 --- CRITICAL: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH\database\classes\Database\MySQLi.php [ 174 ] in C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php:251
2015-05-11 11:27:33 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `ro...', false, Array)
#1 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(96): Kohana_ORM->add('roles', Object(Model_Role))
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_reg()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php:251
2015-05-11 11:28:59 --- CRITICAL: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH\database\classes\Database\MySQLi.php [ 174 ] in C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php:251
2015-05-11 11:28:59 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `ro...', false, Array)
#1 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(96): Kohana_ORM->add('roles', Object(Model_Role))
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_reg()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php:251
2015-05-11 11:29:47 --- CRITICAL: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH\orm\classes\Kohana\ORM.php [ 1567 ] in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1567
2015-05-11 11:29:47 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 1567, Array)
#1 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(96): Kohana_ORM->add('roles', Object(Model_Role))
#2 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_reg()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1567
2015-05-11 11:33:04 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_role' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-05-11 11:33:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-11 11:34:45 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_role' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-05-11 11:34:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-11 11:35:34 --- CRITICAL: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH\orm\classes\Kohana\ORM.php [ 1567 ] in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1567
2015-05-11 11:35:34 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 1567, Array)
#1 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(96): Kohana_ORM->add('roles', Object(Model_Role))
#2 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_reg()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1567
2015-05-11 11:38:12 --- CRITICAL: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH\orm\classes\Kohana\ORM.php [ 1567 ] in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1567
2015-05-11 11:38:12 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 1567, Array)
#1 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(96): Kohana_ORM->add('roles', Object(Model_Role))
#2 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_reg()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1567
2015-05-11 11:38:26 --- CRITICAL: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH\orm\classes\Kohana\ORM.php [ 1567 ] in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1567
2015-05-11 11:38:26 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 1567, Array)
#1 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(96): Kohana_ORM->add('roles', Object(Model_Role))
#2 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_reg()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1567
2015-05-11 11:40:46 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH\classes\Controller\auth.php [ 55 ] in file:line
2015-05-11 11:40:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-11 11:42:02 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH\classes\Controller\auth.php [ 55 ] in file:line
2015-05-11 11:42:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-11 12:28:23 --- CRITICAL: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH\database\classes\Database\MySQLi.php [ 174 ] in C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php:251
2015-05-11 12:28:23 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `ro...', false, Array)
#1 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(96): Kohana_ORM->add('roles', Object(Model_Role))
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_reg()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php:251
2015-05-11 12:30:44 --- CRITICAL: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH\database\classes\Database\MySQLi.php [ 174 ] in C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php:251
2015-05-11 12:30:44 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `ro...', false, Array)
#1 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(96): Kohana_ORM->add('roles', Object(Model_Role))
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_reg()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php:251
2015-05-11 12:33:29 --- CRITICAL: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH\database\classes\Database\MySQLi.php [ 174 ] in C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php:251
2015-05-11 12:33:29 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `ro...', false, Array)
#1 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(96): Kohana_ORM->add('roles', Object(Model_Role))
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_reg()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php:251
2015-05-11 12:35:06 --- CRITICAL: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH\database\classes\Database\MySQLi.php [ 174 ] in C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php:251
2015-05-11 12:35:06 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `ro...', false, Array)
#1 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(96): Kohana_ORM->add('roles', Object(Model_Role))
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_reg()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php:251
2015-05-11 12:35:42 --- CRITICAL: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH\database\classes\Database\MySQLi.php [ 174 ] in C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php:251
2015-05-11 12:35:42 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `ro...', false, Array)
#1 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(95): Kohana_ORM->add('roles', Object(Model_Role))
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_reg()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php:251
2015-05-11 12:35:52 --- CRITICAL: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH\database\classes\Database\MySQLi.php [ 174 ] in C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php:251
2015-05-11 12:35:52 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `ro...', false, Array)
#1 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(95): Kohana_ORM->add('roles', Object(Model_Role))
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_reg()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php:251
2015-05-11 12:37:03 --- CRITICAL: ErrorException [ 2 ]: Missing argument 4 for Model_Register::reg(), called in C:\OpenServer\domains\Social\application\classes\Controller\auth.php on line 99 and defined ~ APPPATH\classes\Model\register.php [ 7 ] in C:\OpenServer\domains\Social\application\classes\Model\register.php:7
2015-05-11 12:37:03 --- DEBUG: #0 C:\OpenServer\domains\Social\application\classes\Model\register.php(7): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\OpenServer\d...', 7, Array)
#1 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(99): Model_Register->reg('Arc1234', 'Valknut29@mail....', '123123123')
#2 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_reg()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\Social\application\classes\Model\register.php:7
2015-05-11 12:37:28 --- CRITICAL: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH\database\classes\Database\MySQLi.php [ 174 ] in C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php:251
2015-05-11 12:37:28 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `ro...', false, Array)
#1 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\OpenServer\domains\Social\application\classes\Model\register.php(19): Kohana_ORM->add('roles', Object(Model_Role))
#3 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(99): Model_Register->reg('Arc1234', 'Valknut29@mail....', '123123123')
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_reg()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php:251
2015-05-11 12:38:57 --- CRITICAL: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH\database\classes\Database\MySQLi.php [ 174 ] in C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php:251
2015-05-11 12:38:57 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `ro...', false, Array)
#1 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\OpenServer\domains\Social\application\classes\Model\register.php(25): Kohana_ORM->add('roles', Object(Model_Role))
#3 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(99): Model_Register->reg('Arc1234', 'Valknut29@mail....', '123123123')
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_reg()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php:251
2015-05-11 12:55:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH\classes\Controller\auth.php [ 131 ] in file:line
2015-05-11 12:55:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-11 15:10:23 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\OpenServer\domains\Social\system\classes\Kohana\View.php:145
2015-05-11 15:10:23 --- DEBUG: #0 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\OpenServer\domains\Social\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\OpenServer\domains\Social\application\classes\mycontroller.php(12): Kohana_Controller_Template->before()
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(69): Mycontroller->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Wall))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\Social\system\classes\Kohana\View.php:145
2015-05-11 15:10:24 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\OpenServer\domains\Social\system\classes\Kohana\View.php:145
2015-05-11 15:10:24 --- DEBUG: #0 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\OpenServer\domains\Social\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\OpenServer\domains\Social\application\classes\mycontroller.php(12): Kohana_Controller_Template->before()
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(69): Mycontroller->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Wall))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\Social\system\classes\Kohana\View.php:145
2015-05-11 15:11:06 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\OpenServer\domains\Social\system\classes\Kohana\View.php:145
2015-05-11 15:11:06 --- DEBUG: #0 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\OpenServer\domains\Social\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\OpenServer\domains\Social\application\classes\mycontroller.php(12): Kohana_Controller_Template->before()
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(69): Mycontroller->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Wall))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\Social\system\classes\Kohana\View.php:145