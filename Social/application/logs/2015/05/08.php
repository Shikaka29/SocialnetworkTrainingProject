<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-08 05:55:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category_name ~ APPPATH\views\materialsview.php [ 1 ] in C:\OpenServer\domains\Social\application\views\materialsview.php:1
2015-05-08 05:55:36 --- DEBUG: #0 C:\OpenServer\domains\Social\application\views\materialsview.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 1, Array)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\Social\application\views\basic.php(22): Kohana_View->__toString()
#5 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Materials))
#11 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\Social\application\views\materialsview.php:1
2015-05-08 06:01:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\Model\material.php [ 53 ] in C:\OpenServer\domains\Social\application\classes\Model\material.php:53
2015-05-08 06:01:44 --- DEBUG: #0 C:\OpenServer\domains\Social\application\classes\Model\material.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 53, Array)
#1 C:\OpenServer\domains\Social\application\classes\Controller\materials.php(34): Model_Material->showMaterialById('7')
#2 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Materials->action_showcontent()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Materials))
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\Social\application\classes\Model\material.php:53
2015-05-08 06:02:41 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Category::getCategoryInfoByUrl() ~ APPPATH\classes\Controller\materials.php [ 16 ] in file:line
2015-05-08 06:02:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line