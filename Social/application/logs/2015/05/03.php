<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-03 05:46:25 --- CRITICAL: Swift_TransportException [ 0 ]: Expected response code 250 but got code "535", with message "535-5.7.8 Username and Password not accepted. Learn more at
535 5.7.8 http://support.google.com/mail/bin/answer.py?answer=14257 f7sm2639070lbc.9 - gsmtp
" ~ MODPATH\email\vendor\swiftmailer\lib\classes\Swift\Transport\AbstractSmtpTransport.php [ 383 ] in C:\OpenServer\domains\Social\modules\email\vendor\swiftmailer\lib\classes\Swift\Transport\AbstractSmtpTransport.php:281
2015-05-03 05:46:25 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\email\vendor\swiftmailer\lib\classes\Swift\Transport\AbstractSmtpTransport.php(281): Swift_Transport_AbstractSmtpTransport->_assertResponseCode('535-5.7.8 Usern...', Array)
#1 C:\OpenServer\domains\Social\modules\email\vendor\swiftmailer\lib\classes\Swift\Transport\EsmtpTransport.php(243): Swift_Transport_AbstractSmtpTransport->executeCommand('RSET??', Array, Array)
#2 C:\OpenServer\domains\Social\modules\email\vendor\swiftmailer\lib\classes\Swift\Transport\Esmtp\Auth\XOAuth2Authenticator.php(54): Swift_Transport_EsmtpTransport->executeCommand('RSET??', Array)
#3 C:\OpenServer\domains\Social\modules\email\vendor\swiftmailer\lib\classes\Swift\Transport\Esmtp\AuthHandler.php(176): Swift_Transport_Esmtp_Auth_XOAuth2Authenticator->authenticate(Object(Swift_SmtpTransport), 'socialnet2015@g...', 'Future123')
#4 C:\OpenServer\domains\Social\modules\email\vendor\swiftmailer\lib\classes\Swift\Transport\EsmtpTransport.php(307): Swift_Transport_Esmtp_AuthHandler->afterEhlo(Object(Swift_SmtpTransport))
#5 C:\OpenServer\domains\Social\modules\email\vendor\swiftmailer\lib\classes\Swift\Transport\AbstractSmtpTransport.php(118): Swift_Transport_EsmtpTransport->_doHeloCommand()
#6 C:\OpenServer\domains\Social\modules\email\vendor\swiftmailer\lib\classes\Swift\Mailer.php(79): Swift_Transport_AbstractSmtpTransport->start()
#7 C:\OpenServer\domains\Social\modules\email\classes\Kohana\Email.php(405): Swift_Mailer->send(Object(Swift_Message), Array)
#8 C:\OpenServer\domains\Social\application\classes\Model\register.php(24): Kohana_Email->send()
#9 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(85): Model_Register->reg('qwe1q', 'Shikaka29@mail....', 'Future123')
#10 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_reg()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#13 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#16 {main} in C:\OpenServer\domains\Social\modules\email\vendor\swiftmailer\lib\classes\Swift\Transport\AbstractSmtpTransport.php:281
2015-05-03 07:09:27 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1362
2015-05-03 07:09:27 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#2 C:\OpenServer\domains\Social\application\classes\Model\register.php(58): Kohana_ORM->save()
#3 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(113): Model_Register->CreateNewPassword('Shikaka29@mail....')
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_RememberPassword()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1362
2015-05-03 07:38:37 --- CRITICAL: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_Myuser' does not have a method 'username_unique' ~ SYSPATH\classes\Kohana\Validation.php [ 377 ] in file:line
2015-05-03 07:38:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'C:\OpenServer\d...', 377, Array)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#2 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#3 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#4 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#5 C:\OpenServer\domains\Social\application\classes\Model\register.php(58): Kohana_ORM->save()
#6 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(113): Model_Register->CreateNewPassword('Shikaka29@mail....')
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_RememberPassword()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#10 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2015-05-03 07:48:37 --- CRITICAL: ErrorException [ 1 ]: Call to a member function message() on a non-object ~ APPPATH\classes\Model\register.php [ 61 ] in file:line
2015-05-03 07:48:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-03 08:12:13 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Auth::action_checkcode(), called in C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\auth.php [ 125 ] in C:\OpenServer\domains\Social\application\classes\Controller\auth.php:125
2015-05-03 08:12:13 --- DEBUG: #0 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(125): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\OpenServer\d...', 125, Array)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_checkcode()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\Social\application\classes\Controller\auth.php:125
2015-05-03 08:14:06 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Auth::action_checkcode(), called in C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\auth.php [ 125 ] in C:\OpenServer\domains\Social\application\classes\Controller\auth.php:125
2015-05-03 08:14:06 --- DEBUG: #0 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(125): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\OpenServer\d...', 125, Array)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_checkcode()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\Social\application\classes\Controller\auth.php:125
2015-05-03 08:14:21 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Auth::action_checkcode(), called in C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\auth.php [ 125 ] in C:\OpenServer\domains\Social\application\classes\Controller\auth.php:125
2015-05-03 08:14:21 --- DEBUG: #0 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(125): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\OpenServer\d...', 125, Array)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_checkcode()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\Social\application\classes\Controller\auth.php:125
2015-05-03 08:17:44 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Auth::action_checkcode(), called in C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\auth.php [ 125 ] in C:\OpenServer\domains\Social\application\classes\Controller\auth.php:125
2015-05-03 08:17:44 --- DEBUG: #0 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(125): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\OpenServer\d...', 125, Array)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_checkcode()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\Social\application\classes\Controller\auth.php:125
2015-05-03 08:50:49 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Model_Register::resetpassword(), called in C:\OpenServer\domains\Social\application\classes\Controller\auth.php on line 132 and defined ~ APPPATH\classes\Model\register.php [ 72 ] in C:\OpenServer\domains\Social\application\classes\Model\register.php:72
2015-05-03 08:50:49 --- DEBUG: #0 C:\OpenServer\domains\Social\application\classes\Model\register.php(72): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\OpenServer\d...', 72, Array)
#1 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(132): Model_Register->resetpassword(NULL)
#2 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_checkcode()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\Social\application\classes\Model\register.php:72
2015-05-03 08:55:37 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_Register::$request ~ APPPATH\classes\Model\register.php [ 74 ] in C:\OpenServer\domains\Social\application\classes\Model\register.php:74
2015-05-03 08:55:37 --- DEBUG: #0 C:\OpenServer\domains\Social\application\classes\Model\register.php(74): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 74, Array)
#1 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(132): Model_Register->resetpassword(NULL)
#2 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_checkcode()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\Social\application\classes\Model\register.php:74
2015-05-03 09:03:45 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1362
2015-05-03 09:03:45 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#2 C:\OpenServer\domains\Social\application\classes\Model\register.php(92): Kohana_ORM->save()
#3 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(132): Model_Register->resetpassword(NULL)
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_checkcode()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1362
2015-05-03 09:04:04 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1362
2015-05-03 09:04:04 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#2 C:\OpenServer\domains\Social\application\classes\Model\register.php(92): Kohana_ORM->save()
#3 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(132): Model_Register->resetpassword(NULL)
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_checkcode()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1362
2015-05-03 15:18:18 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Auth::action_checkcode(), called in C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\auth.php [ 125 ] in C:\OpenServer\domains\Social\application\classes\Controller\auth.php:125
2015-05-03 15:18:18 --- DEBUG: #0 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(125): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\OpenServer\d...', 125, Array)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_checkcode()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\Social\application\classes\Controller\auth.php:125
2015-05-03 15:23:38 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Auth::action_checkcode(), called in C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\auth.php [ 125 ] in C:\OpenServer\domains\Social\application\classes\Controller\auth.php:125
2015-05-03 15:23:38 --- DEBUG: #0 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(125): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\OpenServer\d...', 125, Array)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_checkcode()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\Social\application\classes\Controller\auth.php:125
2015-05-03 15:40:33 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1362
2015-05-03 15:40:33 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#2 C:\OpenServer\domains\Social\application\classes\Model\register.php(92): Kohana_ORM->save()
#3 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(132): Model_Register->resetpassword(NULL)
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_checkcode()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1362
2015-05-03 15:41:32 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1362
2015-05-03 15:41:32 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#2 C:\OpenServer\domains\Social\application\classes\Model\register.php(92): Kohana_ORM->save()
#3 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(132): Model_Register->resetpassword(NULL)
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_checkcode()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1362
2015-05-03 15:44:30 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1362
2015-05-03 15:44:30 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#2 C:\OpenServer\domains\Social\application\classes\Model\register.php(92): Kohana_ORM->save()
#3 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(132): Model_Register->resetpassword(NULL)
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_checkcode()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1362
2015-05-03 16:00:45 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1362
2015-05-03 16:00:45 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#2 C:\OpenServer\domains\Social\application\classes\Model\register.php(58): Kohana_ORM->save()
#3 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(113): Model_Register->CreateNewPassword('Shikaka29@mail....')
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_RememberPassword()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php:1362