<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-01 05:52:13 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'Shikaka29' for key 'uniq_username' [ INSERT INTO `users` (`username`, `email`, `password`) VALUES ('Shikaka29', 'Frostryu@gmail.com', '12345') ] ~ MODPATH\database\classes\Database\MySQLi.php [ 174 ] in C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php:251
2015-05-01 05:52:13 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `us...', false, Array)
#1 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\OpenServer\domains\Social\application\classes\Model\register.php(16): Kohana_ORM->save()
#4 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(84): Model_Register->reg('Shikaka29', 'Frostryu@gmail....', '12345')
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_reg()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#11 {main} in C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php:251
2015-05-01 05:53:01 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'Naruto@mail.ru' for key 'uniq_email' [ INSERT INTO `users` (`username`, `email`, `password`) VALUES ('Valknut29', 'Naruto@mail.ru', '12345') ] ~ MODPATH\database\classes\Database\MySQLi.php [ 174 ] in C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php:251
2015-05-01 05:53:01 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `us...', false, Array)
#1 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\OpenServer\domains\Social\application\classes\Model\register.php(16): Kohana_ORM->save()
#4 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(84): Model_Register->reg('Valknut29', 'Naruto@mail.ru', 'qqq')
#5 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_reg()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#11 {main} in C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php:251
2015-05-01 07:07:12 --- CRITICAL: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Validation::rule() must be an array, integer given, called in C:\OpenServer\domains\Social\system\classes\Kohana\Validation.php on line 242 and defined ~ SYSPATH\classes\Kohana\Validation.php [ 211 ] in C:\OpenServer\domains\Social\system\classes\Kohana\Validation.php:211
2015-05-01 07:07:12 --- DEBUG: #0 C:\OpenServer\domains\Social\system\classes\Kohana\Validation.php(211): Kohana_Core::error_handler(4096, 'Argument 3 pass...', 'C:\OpenServer\d...', 211, Array)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\Validation.php(242): Kohana_Validation->rule('password', 'min_length', 5)
#2 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(410): Kohana_Validation->rules('password', Array)
#3 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1269): Kohana_ORM->_validation()
#4 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#5 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#6 C:\OpenServer\domains\Social\application\classes\Model\register.php(20): Kohana_ORM->save()
#7 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(84): Model_Register->reg('Valknut29', 'Naruto@mail.ru', '')
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_reg()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\Social\system\classes\Kohana\Validation.php:211
2015-05-01 07:07:51 --- CRITICAL: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Validation::rule() must be an array, integer given, called in C:\OpenServer\domains\Social\system\classes\Kohana\Validation.php on line 242 and defined ~ SYSPATH\classes\Kohana\Validation.php [ 211 ] in C:\OpenServer\domains\Social\system\classes\Kohana\Validation.php:211
2015-05-01 07:07:51 --- DEBUG: #0 C:\OpenServer\domains\Social\system\classes\Kohana\Validation.php(211): Kohana_Core::error_handler(4096, 'Argument 3 pass...', 'C:\OpenServer\d...', 211, Array)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\Validation.php(242): Kohana_Validation->rule('password', 'min_length', 5)
#2 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(410): Kohana_Validation->rules('password', Array)
#3 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1269): Kohana_ORM->_validation()
#4 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#5 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#6 C:\OpenServer\domains\Social\application\classes\Model\register.php(20): Kohana_ORM->save()
#7 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(84): Model_Register->reg('zaza1', 'q1@mail.ru', '12345')
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_reg()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\Social\system\classes\Kohana\Validation.php:211
2015-05-01 07:08:00 --- CRITICAL: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Validation::rule() must be an array, integer given, called in C:\OpenServer\domains\Social\system\classes\Kohana\Validation.php on line 242 and defined ~ SYSPATH\classes\Kohana\Validation.php [ 211 ] in C:\OpenServer\domains\Social\system\classes\Kohana\Validation.php:211
2015-05-01 07:08:00 --- DEBUG: #0 C:\OpenServer\domains\Social\system\classes\Kohana\Validation.php(211): Kohana_Core::error_handler(4096, 'Argument 3 pass...', 'C:\OpenServer\d...', 211, Array)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\Validation.php(242): Kohana_Validation->rule('password', 'min_length', 5)
#2 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(410): Kohana_Validation->rules('password', Array)
#3 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1269): Kohana_ORM->_validation()
#4 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#5 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#6 C:\OpenServer\domains\Social\application\classes\Model\register.php(20): Kohana_ORM->save()
#7 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(84): Model_Register->reg('', '', '')
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_reg()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\Social\system\classes\Kohana\Validation.php:211
2015-05-01 07:09:58 --- CRITICAL: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Validation::rule() must be an array, integer given, called in C:\OpenServer\domains\Social\system\classes\Kohana\Validation.php on line 242 and defined ~ SYSPATH\classes\Kohana\Validation.php [ 211 ] in C:\OpenServer\domains\Social\system\classes\Kohana\Validation.php:211
2015-05-01 07:09:58 --- DEBUG: #0 C:\OpenServer\domains\Social\system\classes\Kohana\Validation.php(211): Kohana_Core::error_handler(4096, 'Argument 3 pass...', 'C:\OpenServer\d...', 211, Array)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\Validation.php(242): Kohana_Validation->rule('password', 'min_length', 5)
#2 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(410): Kohana_Validation->rules('password', Array)
#3 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1269): Kohana_ORM->_validation()
#4 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#5 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#6 C:\OpenServer\domains\Social\application\classes\Model\register.php(20): Kohana_ORM->save()
#7 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(84): Model_Register->reg('', '', '')
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_reg()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\Social\system\classes\Kohana\Validation.php:211
2015-05-01 07:14:24 --- CRITICAL: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Validation::rule() must be an array, integer given, called in C:\OpenServer\domains\Social\system\classes\Kohana\Validation.php on line 242 and defined ~ SYSPATH\classes\Kohana\Validation.php [ 211 ] in C:\OpenServer\domains\Social\system\classes\Kohana\Validation.php:211
2015-05-01 07:14:24 --- DEBUG: #0 C:\OpenServer\domains\Social\system\classes\Kohana\Validation.php(211): Kohana_Core::error_handler(4096, 'Argument 3 pass...', 'C:\OpenServer\d...', 211, Array)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\Validation.php(242): Kohana_Validation->rule('password', 'min_length', 5)
#2 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(410): Kohana_Validation->rules('password', Array)
#3 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1269): Kohana_ORM->_validation()
#4 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#5 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#6 C:\OpenServer\domains\Social\application\classes\Model\register.php(20): Kohana_ORM->save()
#7 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(84): Model_Register->reg('', '', '')
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_reg()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\Social\system\classes\Kohana\Validation.php:211
2015-05-01 07:27:23 --- CRITICAL: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_Myuser' does not have a method 'email_available' ~ SYSPATH\classes\Kohana\Validation.php [ 377 ] in file:line
2015-05-01 07:27:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'C:\OpenServer\d...', 377, Array)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#2 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#3 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#4 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#5 C:\OpenServer\domains\Social\application\classes\Model\register.php(20): Kohana_ORM->save()
#6 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(84): Model_Register->reg('', 'Naruto@mail.ru', '')
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_reg()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#10 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2015-05-01 07:31:47 --- CRITICAL: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_Myuser' does not have a method 'username_unique' ~ SYSPATH\classes\Kohana\Validation.php [ 377 ] in file:line
2015-05-01 07:31:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'C:\OpenServer\d...', 377, Array)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#2 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#3 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#4 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#5 C:\OpenServer\domains\Social\application\classes\Model\register.php(20): Kohana_ORM->save()
#6 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(84): Model_Register->reg('Valknut29', '', '')
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_reg()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#10 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2015-05-01 07:47:25 --- CRITICAL: ErrorException [ 4096 ]: Object of class Validation could not be converted to string ~ MODPATH\database\classes\Kohana\Database.php [ 461 ] in C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database.php:461
2015-05-01 07:47:25 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database.php(461): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\OpenServer\d...', 461, Array)
#1 C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query\Builder.php(116): Kohana_Database->quote(Object(Validation))
#2 C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query\Builder\Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQLi), Array)
#3 C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQLi))
#4 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQLi))
#5 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#6 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(266): Kohana_ORM->find()
#7 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(Array)
#8 C:\OpenServer\domains\Social\application\classes\Model\myuser.php(32): Kohana_ORM::factory('myuser', Array)
#9 [internal function]: Model_Myuser->username_unique(Object(Validation), 'username')
#10 C:\OpenServer\domains\Social\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#11 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#12 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#13 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#14 C:\OpenServer\domains\Social\application\classes\Model\register.php(20): Kohana_ORM->save()
#15 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(84): Model_Register->reg('qweqwe1', 'Naruto@mail.ru', '123123123')
#16 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_reg()
#17 [internal function]: Kohana_Controller->execute()
#18 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#19 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#20 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#21 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#22 {main} in C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database.php:461
2015-05-01 07:47:35 --- CRITICAL: ErrorException [ 4096 ]: Object of class Validation could not be converted to string ~ MODPATH\database\classes\Kohana\Database.php [ 461 ] in C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database.php:461
2015-05-01 07:47:35 --- DEBUG: #0 C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database.php(461): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\OpenServer\d...', 461, Array)
#1 C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query\Builder.php(116): Kohana_Database->quote(Object(Validation))
#2 C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query\Builder\Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQLi), Array)
#3 C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQLi))
#4 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQLi))
#5 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#6 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(266): Kohana_ORM->find()
#7 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(Array)
#8 C:\OpenServer\domains\Social\application\classes\Model\myuser.php(45): Kohana_ORM::factory('myuser', Array)
#9 [internal function]: Model_Myuser->email_unique(Object(Validation), 'email')
#10 C:\OpenServer\domains\Social\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#11 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#12 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#13 C:\OpenServer\domains\Social\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#14 C:\OpenServer\domains\Social\application\classes\Model\register.php(20): Kohana_ORM->save()
#15 C:\OpenServer\domains\Social\application\classes\Controller\auth.php(84): Model_Register->reg('', 'Naruto@mail.ru', '')
#16 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(84): Controller_Auth->action_reg()
#17 [internal function]: Kohana_Controller->execute()
#18 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#19 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#20 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#21 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#22 {main} in C:\OpenServer\domains\Social\modules\database\classes\Kohana\Database.php:461
2015-05-01 10:12:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\basic.php [ 6 ] in C:\OpenServer\domains\Social\application\views\basic.php:6
2015-05-01 10:12:14 --- DEBUG: #0 C:\OpenServer\domains\Social\application\views\basic.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 6, Array)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\Social\application\views\basic.php:6
2015-05-01 10:14:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: style ~ APPPATH\views\basic.php [ 7 ] in C:\OpenServer\domains\Social\application\views\basic.php:7
2015-05-01 10:14:28 --- DEBUG: #0 C:\OpenServer\domains\Social\application\views\basic.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 7, Array)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\Social\application\views\basic.php:7
2015-05-01 10:16:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\basic.php [ 6 ] in C:\OpenServer\domains\Social\application\views\basic.php:6
2015-05-01 10:16:25 --- DEBUG: #0 C:\OpenServer\domains\Social\application\views\basic.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 6, Array)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\Social\application\views\basic.php:6
2015-05-01 10:16:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\basic.php [ 6 ] in C:\OpenServer\domains\Social\application\views\basic.php:6
2015-05-01 10:16:29 --- DEBUG: #0 C:\OpenServer\domains\Social\application\views\basic.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 6, Array)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\Social\application\views\basic.php:6
2015-05-01 10:16:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\basic.php [ 6 ] in C:\OpenServer\domains\Social\application\views\basic.php:6
2015-05-01 10:16:31 --- DEBUG: #0 C:\OpenServer\domains\Social\application\views\basic.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 6, Array)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\Social\application\views\basic.php:6
2015-05-01 10:16:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\basic.php [ 6 ] in C:\OpenServer\domains\Social\application\views\basic.php:6
2015-05-01 10:16:41 --- DEBUG: #0 C:\OpenServer\domains\Social\application\views\basic.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 6, Array)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\Social\application\views\basic.php:6
2015-05-01 10:16:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\basic.php [ 6 ] in C:\OpenServer\domains\Social\application\views\basic.php:6
2015-05-01 10:16:41 --- DEBUG: #0 C:\OpenServer\domains\Social\application\views\basic.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 6, Array)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\Social\application\views\basic.php:6
2015-05-01 10:19:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\basic.php [ 6 ] in C:\OpenServer\domains\Social\application\views\basic.php:6
2015-05-01 10:19:46 --- DEBUG: #0 C:\OpenServer\domains\Social\application\views\basic.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 6, Array)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\Social\application\views\basic.php:6
2015-05-01 10:19:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\basic.php [ 6 ] in C:\OpenServer\domains\Social\application\views\basic.php:6
2015-05-01 10:19:53 --- DEBUG: #0 C:\OpenServer\domains\Social\application\views\basic.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 6, Array)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\Social\application\views\basic.php:6
2015-05-01 10:19:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\basic.php [ 6 ] in C:\OpenServer\domains\Social\application\views\basic.php:6
2015-05-01 10:19:53 --- DEBUG: #0 C:\OpenServer\domains\Social\application\views\basic.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 6, Array)
#1 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\Social\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\Social\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\Social\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\Social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\Social\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\Social\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\Social\application\views\basic.php:6