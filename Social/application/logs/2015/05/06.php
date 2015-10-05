<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-06 08:10:29 --- CRITICAL: Kohana_Exception [ 0 ]: HTML Purifier is required, please run `composer update` ~ MODPATH\purifier\classes\Purifier\Security.php [ 28 ] in C:\OpenServer\domains\Social\modules\purifier\classes\Purifier\Security.php:37
2015-05-06 08:10:29 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\purifier\classes\Purifier\Security.php(37): Purifier_Security::load()
#1 C:\OpenServer\domains\Social\modules\purifier\classes\Purifier\Security.php(80): Purifier_Security::factory()
#2 C:\OpenServer\domains\Social\modules\purifier\classes\Purifier\Security.php(123): Purifier_Security::htmlpurifier()
#3 C:\OpenServer\domains\Social\application\classes\Model\material.php(22): Purifier_Security::xss_clean('<p>qweqwe</p>?')
#4 C:\OpenServer\domains\Social\application\classes\Controller\admin\main.php(36): Model_Material->addMaterial('1', '<p>qweqwe</p>?')
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Admin_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#11 {main} in C:\OpenServer\domains\Social\modules\purifier\classes\Purifier\Security.php:37
2015-05-06 08:11:33 --- CRITICAL: Kohana_Exception [ 0 ]: HTML Purifier is required, please run `composer update` ~ MODPATH\purifier\classes\Purifier\Security.php [ 28 ] in C:\OpenServer\domains\Social\modules\purifier\classes\Purifier\Security.php:37
2015-05-06 08:11:33 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\purifier\classes\Purifier\Security.php(37): Purifier_Security::load()
#1 C:\OpenServer\domains\Social\modules\purifier\classes\Purifier\Security.php(80): Purifier_Security::factory()
#2 C:\OpenServer\domains\Social\modules\purifier\classes\Purifier\Security.php(123): Purifier_Security::htmlpurifier()
#3 C:\OpenServer\domains\Social\application\classes\Model\material.php(22): Purifier_Security::xss_clean('<p>weqe</p>?')
#4 C:\OpenServer\domains\Social\application\classes\Controller\admin\main.php(36): Model_Material->addMaterial('1', '<p>weqe</p>?')
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Admin_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#11 {main} in C:\OpenServer\domains\Social\modules\purifier\classes\Purifier\Security.php:37