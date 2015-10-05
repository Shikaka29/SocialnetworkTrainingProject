<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-02 06:28:32 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Email::factory() ~ APPPATH\classes\Model\useful.php [ 9 ] in file:line
2015-05-02 06:28:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-02 06:30:48 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Email::factory() ~ APPPATH\classes\Model\useful.php [ 9 ] in file:line
2015-05-02 06:30:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-02 06:46:27 --- CRITICAL: Swift_TransportException [ 0 ]: Expected response code 250 but got code "530", with message "530-5.5.1 Authentication Required. Learn more at
530 5.5.1 http://support.google.com/mail/bin/answer.py?answer=14257 ci10sm2001027lad.35 - gsmtp
" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ] in C:\OpenServer\domains\Social\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php:300
2015-05-02 06:46:27 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(300): Swift_Transport_AbstractSmtpTransport->_assertResponseCode('530-5.5.1 Authe...', Array)
#1 C:\OpenServer\domains\Social\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(207): Swift_Transport_AbstractSmtpTransport->executeCommand('MAIL FROM: <koh...', Array, Array)
#2 C:\OpenServer\domains\Social\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(277): Swift_Transport_EsmtpTransport->executeCommand('MAIL FROM: <koh...', Array)
#3 C:\OpenServer\domains\Social\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(451): Swift_Transport_EsmtpTransport->_doMailFromCommand('kohanaframework...')
#4 C:\OpenServer\domains\Social\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(487): Swift_Transport_AbstractSmtpTransport->_doMailTransaction(Object(Swift_Message), 'kohanaframework...', Array, Array)
#5 C:\OpenServer\domains\Social\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(178): Swift_Transport_AbstractSmtpTransport->_sendTo(Object(Swift_Message), 'kohanaframework...', Array, Array)
#6 C:\OpenServer\domains\Social\modules\email\vendor\swift\classes\Swift\Mailer.php(87): Swift_Transport_AbstractSmtpTransport->send(Object(Swift_Message), Array)
#7 C:\OpenServer\domains\Social\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#8 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(95): Email::send('kohanablog@gmai...', 'kohanaframework...', '???????????????...', '???????????????...', false)
#9 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_reg()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#12 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#15 {main} in C:\OpenServer\domains\Social\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php:300
2015-05-02 06:54:58 --- CRITICAL: ErrorException [ 8 ]: Undefined index: support ~ MODPATH\email\classes\Email.php [ 68 ] in C:\OpenServer\domains\Social\modules\email\classes\Email.php:68
2015-05-02 06:54:58 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\email\classes\Email.php(68): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 68, Array)
#1 C:\OpenServer\domains\Social\modules\email\classes\Email.php(87): Email::instance('support')
#2 C:\OpenServer\domains\Social\application\classes\Model\register.php(27): Email::send('support', 'First message', 'Hello, world!', Array, 'Shikaka29@mail....')
#3 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(84): Model_Register->reg('zaza23', 'Shikaka29@mail....', 'Future123')
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_reg()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\Social\modules\email\classes\Email.php:68
2015-05-02 07:58:08 --- CRITICAL: ErrorException [ 2 ]: include(C:\OpenServer\domains\Social) [function.include]: failed to open stream: Permission denied ~ MODPATH\email\init.php [ 4 ] in C:\OpenServer\domains\Social\modules\email\init.php:4
2015-05-02 07:58:08 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include(C:\Open...', 'C:\OpenServer\d...', 4, Array)
#1 C:\OpenServer\domains\Social\modules\email\init.php(4): include()
#2 C:\OpenServer\domains\Social\system\classes\Kohana\Core.php(602): require_once('C:\OpenServer\d...')
#3 C:\OpenServer\domains\Social\application\bootstrap.php(135): Kohana_Core::modules(Array)
#4 C:\OpenServer\domains\Social\index.php(102): require('C:\OpenServer\d...')
#5 {main} in C:\OpenServer\domains\Social\modules\email\init.php:4
2015-05-02 08:08:55 --- CRITICAL: ErrorException [ 2 ]: include(C:\OpenServer\domains\Social) [function.include]: failed to open stream: Permission denied ~ MODPATH\email\init.php [ 4 ] in C:\OpenServer\domains\Social\modules\email\init.php:4
2015-05-02 08:08:55 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include(C:\Open...', 'C:\OpenServer\d...', 4, Array)
#1 C:\OpenServer\domains\Social\modules\email\init.php(4): include()
#2 C:\OpenServer\domains\Social\system\classes\Kohana\Core.php(602): require_once('C:\OpenServer\d...')
#3 C:\OpenServer\domains\Social\application\bootstrap.php(135): Kohana_Core::modules(Array)
#4 C:\OpenServer\domains\Social\index.php(102): require('C:\OpenServer\d...')
#5 {main} in C:\OpenServer\domains\Social\modules\email\init.php:4
2015-05-02 08:13:15 --- CRITICAL: ErrorException [ 2 ]: include(C:\OpenServer\domains\Social) [function.include]: failed to open stream: Permission denied ~ MODPATH\email\init.php [ 4 ] in C:\OpenServer\domains\Social\modules\email\init.php:4
2015-05-02 08:13:15 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include(C:\Open...', 'C:\OpenServer\d...', 4, Array)
#1 C:\OpenServer\domains\Social\modules\email\init.php(4): include()
#2 C:\OpenServer\domains\Social\system\classes\Kohana\Core.php(602): require_once('C:\OpenServer\d...')
#3 C:\OpenServer\domains\Social\application\bootstrap.php(135): Kohana_Core::modules(Array)
#4 C:\OpenServer\domains\Social\index.php(102): require('C:\OpenServer\d...')
#5 {main} in C:\OpenServer\domains\Social\modules\email\init.php:4
2015-05-02 08:13:16 --- CRITICAL: ErrorException [ 2 ]: include(C:\OpenServer\domains\Social) [function.include]: failed to open stream: Permission denied ~ MODPATH\email\init.php [ 4 ] in C:\OpenServer\domains\Social\modules\email\init.php:4
2015-05-02 08:13:16 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include(C:\Open...', 'C:\OpenServer\d...', 4, Array)
#1 C:\OpenServer\domains\Social\modules\email\init.php(4): include()
#2 C:\OpenServer\domains\Social\system\classes\Kohana\Core.php(602): require_once('C:\OpenServer\d...')
#3 C:\OpenServer\domains\Social\application\bootstrap.php(135): Kohana_Core::modules(Array)
#4 C:\OpenServer\domains\Social\index.php(102): require('C:\OpenServer\d...')
#5 {main} in C:\OpenServer\domains\Social\modules\email\init.php:4
2015-05-02 08:13:17 --- CRITICAL: ErrorException [ 2 ]: include(C:\OpenServer\domains\Social) [function.include]: failed to open stream: Permission denied ~ MODPATH\email\init.php [ 4 ] in C:\OpenServer\domains\Social\modules\email\init.php:4
2015-05-02 08:13:17 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include(C:\Open...', 'C:\OpenServer\d...', 4, Array)
#1 C:\OpenServer\domains\Social\modules\email\init.php(4): include()
#2 C:\OpenServer\domains\Social\system\classes\Kohana\Core.php(602): require_once('C:\OpenServer\d...')
#3 C:\OpenServer\domains\Social\application\bootstrap.php(135): Kohana_Core::modules(Array)
#4 C:\OpenServer\domains\Social\index.php(102): require('C:\OpenServer\d...')
#5 {main} in C:\OpenServer\domains\Social\modules\email\init.php:4
2015-05-02 08:19:39 --- CRITICAL: ErrorException [ 2 ]: include(C:\OpenServer\domains\Social) [function.include]: failed to open stream: Permission denied ~ MODPATH\email\init.php [ 4 ] in C:\OpenServer\domains\Social\modules\email\init.php:4
2015-05-02 08:19:39 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include(C:\Open...', 'C:\OpenServer\d...', 4, Array)
#1 C:\OpenServer\domains\Social\modules\email\init.php(4): include()
#2 C:\OpenServer\domains\Social\system\classes\Kohana\Core.php(602): require_once('C:\OpenServer\d...')
#3 C:\OpenServer\domains\Social\application\bootstrap.php(135): Kohana_Core::modules(Array)
#4 C:\OpenServer\domains\Social\index.php(102): require('C:\OpenServer\d...')
#5 {main} in C:\OpenServer\domains\Social\modules\email\init.php:4
2015-05-02 08:22:51 --- CRITICAL: ErrorException [ 2 ]: include(C:\OpenServer\domains\Social) [function.include]: failed to open stream: Permission denied ~ MODPATH\email\init.php [ 4 ] in C:\OpenServer\domains\Social\modules\email\init.php:4
2015-05-02 08:22:51 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include(C:\Open...', 'C:\OpenServer\d...', 4, Array)
#1 C:\OpenServer\domains\Social\modules\email\init.php(4): include()
#2 C:\OpenServer\domains\Social\system\classes\Kohana\Core.php(602): require_once('C:\OpenServer\d...')
#3 C:\OpenServer\domains\Social\application\bootstrap.php(135): Kohana_Core::modules(Array)
#4 C:\OpenServer\domains\Social\index.php(102): require('C:\OpenServer\d...')
#5 {main} in C:\OpenServer\domains\Social\modules\email\init.php:4
2015-05-02 08:22:51 --- CRITICAL: ErrorException [ 2 ]: include(C:\OpenServer\domains\Social) [function.include]: failed to open stream: Permission denied ~ MODPATH\email\init.php [ 4 ] in C:\OpenServer\domains\Social\modules\email\init.php:4
2015-05-02 08:22:51 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include(C:\Open...', 'C:\OpenServer\d...', 4, Array)
#1 C:\OpenServer\domains\Social\modules\email\init.php(4): include()
#2 C:\OpenServer\domains\Social\system\classes\Kohana\Core.php(602): require_once('C:\OpenServer\d...')
#3 C:\OpenServer\domains\Social\application\bootstrap.php(135): Kohana_Core::modules(Array)
#4 C:\OpenServer\domains\Social\index.php(102): require('C:\OpenServer\d...')
#5 {main} in C:\OpenServer\domains\Social\modules\email\init.php:4
2015-05-02 08:22:51 --- CRITICAL: ErrorException [ 2 ]: include(C:\OpenServer\domains\Social) [function.include]: failed to open stream: Permission denied ~ MODPATH\email\init.php [ 4 ] in C:\OpenServer\domains\Social\modules\email\init.php:4
2015-05-02 08:22:51 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include(C:\Open...', 'C:\OpenServer\d...', 4, Array)
#1 C:\OpenServer\domains\Social\modules\email\init.php(4): include()
#2 C:\OpenServer\domains\Social\system\classes\Kohana\Core.php(602): require_once('C:\OpenServer\d...')
#3 C:\OpenServer\domains\Social\application\bootstrap.php(135): Kohana_Core::modules(Array)
#4 C:\OpenServer\domains\Social\index.php(102): require('C:\OpenServer\d...')
#5 {main} in C:\OpenServer\domains\Social\modules\email\init.php:4
2015-05-02 08:22:52 --- CRITICAL: ErrorException [ 2 ]: include(C:\OpenServer\domains\Social) [function.include]: failed to open stream: Permission denied ~ MODPATH\email\init.php [ 4 ] in C:\OpenServer\domains\Social\modules\email\init.php:4
2015-05-02 08:22:52 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include(C:\Open...', 'C:\OpenServer\d...', 4, Array)
#1 C:\OpenServer\domains\Social\modules\email\init.php(4): include()
#2 C:\OpenServer\domains\Social\system\classes\Kohana\Core.php(602): require_once('C:\OpenServer\d...')
#3 C:\OpenServer\domains\Social\application\bootstrap.php(135): Kohana_Core::modules(Array)
#4 C:\OpenServer\domains\Social\index.php(102): require('C:\OpenServer\d...')
#5 {main} in C:\OpenServer\domains\Social\modules\email\init.php:4
2015-05-02 08:23:16 --- CRITICAL: ErrorException [ 1 ]: Class 'Swift_MailTransport' not found ~ MODPATH\email\classes\Email\Core.php [ 58 ] in file:line
2015-05-02 08:23:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-02 08:51:15 --- CRITICAL: ErrorException [ 1 ]: Class 'Swift' not found ~ MODPATH\email\classes\Kohana\Email.php [ 459 ] in file:line
2015-05-02 08:51:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-02 08:55:34 --- CRITICAL: Swift_TransportException [ 0 ]: Expected response code 250 but got code "535", with message "535-5.7.8 Username and Password not accepted. Learn more at
535 5.7.8 http://support.google.com/mail/bin/answer.py?answer=14257 f4sm2073425lae.18 - gsmtp
" ~ MODPATH\email\vendor\swiftmailer\lib\classes\Swift\Transport\AbstractSmtpTransport.php [ 383 ] in C:\OpenServer\domains\Social\modules\email\vendor\swiftmailer\lib\classes\Swift\Transport\AbstractSmtpTransport.php:281
2015-05-02 08:55:34 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\email\vendor\swiftmailer\lib\classes\Swift\Transport\AbstractSmtpTransport.php(281): Swift_Transport_AbstractSmtpTransport->_assertResponseCode('535-5.7.8 Usern...', Array)
#1 C:\OpenServer\domains\Social\modules\email\vendor\swiftmailer\lib\classes\Swift\Transport\EsmtpTransport.php(243): Swift_Transport_AbstractSmtpTransport->executeCommand('RSET??', Array, Array)
#2 C:\OpenServer\domains\Social\modules\email\vendor\swiftmailer\lib\classes\Swift\Transport\Esmtp\Auth\XOAuth2Authenticator.php(54): Swift_Transport_EsmtpTransport->executeCommand('RSET??', Array)
#3 C:\OpenServer\domains\Social\modules\email\vendor\swiftmailer\lib\classes\Swift\Transport\Esmtp\AuthHandler.php(176): Swift_Transport_Esmtp_Auth_XOAuth2Authenticator->authenticate(Object(Swift_SmtpTransport), 'socialnet2015@g...', 'Future123')
#4 C:\OpenServer\domains\Social\modules\email\vendor\swiftmailer\lib\classes\Swift\Transport\EsmtpTransport.php(307): Swift_Transport_Esmtp_AuthHandler->afterEhlo(Object(Swift_SmtpTransport))
#5 C:\OpenServer\domains\Social\modules\email\vendor\swiftmailer\lib\classes\Swift\Transport\AbstractSmtpTransport.php(118): Swift_Transport_EsmtpTransport->_doHeloCommand()
#6 C:\OpenServer\domains\Social\modules\email\vendor\swiftmailer\lib\classes\Swift\Mailer.php(79): Swift_Transport_AbstractSmtpTransport->start()
#7 C:\OpenServer\domains\Social\modules\email\classes\Kohana\Email.php(405): Swift_Mailer->send(Object(Swift_Message), Array)
#8 C:\OpenServer\domains\Social\application\classes\Model\register.php(24): Kohana_Email->send()
#9 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(85): Model_Register->reg('Arcq', 'Shikaka29@mail....', '123123123')
#10 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_reg()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#13 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#16 {main} in C:\OpenServer\domains\Social\modules\email\vendor\swiftmailer\lib\classes\Swift\Transport\AbstractSmtpTransport.php:281