<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-06-18 12:50:02 --- EMERGENCY: ErrorException [ 4 ]: parse error, expecting `','' or `';'' ~ APPPATH/views/template.php [ 10 ] in :
2013-06-18 12:50:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-18 12:50:18 --- EMERGENCY: ErrorException [ 4 ]: parse error, expecting `','' or `';'' ~ APPPATH/views/template.php [ 10 ] in :
2013-06-18 12:50:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-18 12:50:19 --- EMERGENCY: ErrorException [ 4 ]: parse error, expecting `','' or `';'' ~ APPPATH/views/template.php [ 10 ] in :
2013-06-18 12:50:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-18 12:50:20 --- EMERGENCY: ErrorException [ 4 ]: parse error, expecting `','' or `';'' ~ APPPATH/views/template.php [ 10 ] in :
2013-06-18 12:50:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-18 12:50:22 --- EMERGENCY: ErrorException [ 4 ]: parse error, expecting `','' or `';'' ~ APPPATH/views/template.php [ 10 ] in :
2013-06-18 12:50:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-18 12:50:23 --- EMERGENCY: ErrorException [ 4 ]: parse error, expecting `','' or `';'' ~ APPPATH/views/template.php [ 10 ] in :
2013-06-18 12:50:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-18 12:53:19 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant ‘role’ - assumed '‘role’' ~ APPPATH/classes/Controller/Register.php [ 33 ] in /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/Register.php:33
2013-06-18 12:53:19 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/Register.php(33): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/kevin.ch...', 33, Array)
#1 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_Register->action_complete_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#4 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/Register.php:33
2013-06-18 12:55:13 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1272 ] in /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php:1299
2013-06-18 12:55:13 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php(1299): Kohana_ORM->check(NULL)
#1 /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php(1418): Kohana_ORM->create(NULL)
#2 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/Register.php(32): Kohana_ORM->save()
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_Register->action_complete_registration()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php:1299
2013-06-18 12:55:19 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1272 ] in /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php:1299
2013-06-18 12:55:19 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php(1299): Kohana_ORM->check(NULL)
#1 /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php(1418): Kohana_ORM->create(NULL)
#2 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/Register.php(32): Kohana_ORM->save()
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_Register->action_complete_registration()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php:1299
2013-06-18 12:57:39 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1272 ] in /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php:1299
2013-06-18 12:57:39 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php(1299): Kohana_ORM->check(NULL)
#1 /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php(1418): Kohana_ORM->create(NULL)
#2 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/Register.php(38): Kohana_ORM->save()
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_Register->action_complete_registration()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php:1299
2013-06-18 13:12:27 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/kevin.chen/Development/wefarm_php/modules/database/classes/Kohana/Database/Query.php:251
2013-06-18 13:12:27 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php(1574): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/Register.php(39): Kohana_ORM->add('roles', Object(Model_Role))
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_Register->action_complete_registration()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/kevin.chen/Development/wefarm_php/modules/database/classes/Kohana/Database/Query.php:251
2013-06-18 13:16:54 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1272 ] in /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php:1299
2013-06-18 13:16:54 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php(1299): Kohana_ORM->check(NULL)
#1 /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php(1418): Kohana_ORM->create(NULL)
#2 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/Register.php(38): Kohana_ORM->save()
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_Register->action_complete_registration()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php:1299
2013-06-18 13:17:08 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1272 ] in /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php:1299
2013-06-18 13:17:08 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php(1299): Kohana_ORM->check(NULL)
#1 /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php(1418): Kohana_ORM->create(NULL)
#2 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/Register.php(38): Kohana_ORM->save()
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_Register->action_complete_registration()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php:1299
2013-06-18 13:21:33 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1272 ] in /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php:1299
2013-06-18 13:21:33 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php(1299): Kohana_ORM->check(NULL)
#1 /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php(1418): Kohana_ORM->create(NULL)
#2 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/Register.php(38): Kohana_ORM->save()
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_Register->action_complete_registration()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php:1299
2013-06-18 13:46:46 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Register.php [ 33 ] in :
2013-06-18 13:46:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-18 13:46:51 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Register.php [ 33 ] in :
2013-06-18 13:46:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-18 13:46:53 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Register.php [ 33 ] in :
2013-06-18 13:46:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-18 14:27:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 9 ] in /Users/kevin.chen/Development/wefarm_php/application/views/template.php:9
2013-06-18 14:27:58 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/views/template.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kevin.ch...', 9, Array)
#1 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(61): include('/Users/kevin.ch...')
#2 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kevin.ch...', Array)
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/kevin.chen/Development/wefarm_php/application/views/template.php:9
2013-06-18 14:40:37 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH/classes/Controller/User.php [ 91 ] in :
2013-06-18 14:40:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-18 14:41:37 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/User.php [ 91 ] in :
2013-06-18 14:41:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-18 14:41:38 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/User.php [ 91 ] in :
2013-06-18 14:41:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-18 14:42:15 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/User.php [ 91 ] in :
2013-06-18 14:42:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-18 14:42:16 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/User.php [ 91 ] in :
2013-06-18 14:42:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-18 14:42:17 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/User.php [ 91 ] in :
2013-06-18 14:42:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-18 14:43:13 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/User.php [ 79 ] in :
2013-06-18 14:43:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-18 14:55:08 --- EMERGENCY: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php:600
2013-06-18 14:55:08 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('name')
#1 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php(9): Kohana_ORM->__get('name')
#2 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_User->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php:600
2013-06-18 15:01:00 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/User.php [ 38 ] in :
2013-06-18 15:01:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-18 15:01:01 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/User.php [ 38 ] in :
2013-06-18 15:01:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-18 15:01:04 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/User.php [ 38 ] in :
2013-06-18 15:01:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-18 15:02:06 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/User.php [ 38 ] in :
2013-06-18 15:02:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-18 15:02:07 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/User.php [ 38 ] in :
2013-06-18 15:02:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-18 15:02:20 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/User.php [ 38 ] in :
2013-06-18 15:02:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-18 15:02:20 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/User.php [ 38 ] in :
2013-06-18 15:02:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-18 15:02:33 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/User.php [ 38 ] in :
2013-06-18 15:02:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-18 15:02:34 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/User.php [ 38 ] in :
2013-06-18 15:02:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-18 15:07:45 --- EMERGENCY: ErrorException [ 8 ]: Indirect modification of overloaded property Model_Farmer::$name has no effect ~ APPPATH/classes/Controller/User.php [ 11 ] in /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php:11
2013-06-18 15:07:45 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php(11): Kohana_Core::error_handler(8, 'Indirect modifi...', '/Users/kevin.ch...', 11, Array)
#1 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_User->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php:11
2013-06-18 15:08:21 --- EMERGENCY: ErrorException [ 8 ]: Indirect modification of overloaded property Model_Farmer::$name has no effect ~ APPPATH/classes/Controller/User.php [ 11 ] in /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php:11
2013-06-18 15:08:21 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php(11): Kohana_Core::error_handler(8, 'Indirect modifi...', '/Users/kevin.ch...', 11, Array)
#1 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_User->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php:11
2013-06-18 15:09:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: farm ~ APPPATH/views/user/account.php [ 14 ] in /Users/kevin.chen/Development/wefarm_php/application/views/user/account.php:14
2013-06-18 15:09:49 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/views/user/account.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kevin.ch...', 14, Array)
#1 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(61): include('/Users/kevin.ch...')
#2 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kevin.ch...', Array)
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kevin.chen/Development/wefarm_php/application/views/template.php(11): Kohana_View->__toString()
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(61): include('/Users/kevin.ch...')
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kevin.ch...', Array)
#7 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/kevin.chen/Development/wefarm_php/application/views/user/account.php:14
2013-06-18 15:10:09 --- EMERGENCY: Kohana_Exception [ 0 ]: The price property does not exist in the Model_Farmer class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php:600
2013-06-18 15:10:09 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('price')
#1 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php(15): Kohana_ORM->__get('price')
#2 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_User->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php:600
2013-06-18 15:10:11 --- EMERGENCY: Kohana_Exception [ 0 ]: The price property does not exist in the Model_Farmer class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php:600
2013-06-18 15:10:11 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('price')
#1 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php(15): Kohana_ORM->__get('price')
#2 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_User->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php:600
2013-06-18 15:10:16 --- EMERGENCY: Kohana_Exception [ 0 ]: The price property does not exist in the Model_Farmer class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php:600
2013-06-18 15:10:16 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('price')
#1 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php(15): Kohana_ORM->__get('price')
#2 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_User->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php:600
2013-06-18 15:10:18 --- EMERGENCY: Kohana_Exception [ 0 ]: The price property does not exist in the Model_Farmer class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php:600
2013-06-18 15:10:18 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('price')
#1 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php(15): Kohana_ORM->__get('price')
#2 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_User->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php:600
2013-06-18 15:10:19 --- EMERGENCY: Kohana_Exception [ 0 ]: The price property does not exist in the Model_Farmer class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php:600
2013-06-18 15:10:19 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('price')
#1 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php(15): Kohana_ORM->__get('price')
#2 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_User->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php:600
2013-06-18 15:10:20 --- EMERGENCY: Kohana_Exception [ 0 ]: The price property does not exist in the Model_Farmer class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php:600
2013-06-18 15:10:20 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('price')
#1 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php(15): Kohana_ORM->__get('price')
#2 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_User->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php:600
2013-06-18 15:21:36 --- EMERGENCY: View_Exception [ 0 ]: The requested view user/edit could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php:137
2013-06-18 15:21:36 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(137): Kohana_View->set_filename('user/edit')
#1 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(30): Kohana_View->__construct('user/edit', NULL)
#2 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php(114): Kohana_View::factory('user/edit')
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_User->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php:137
2013-06-18 15:21:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH/views/user/edit.php [ 6 ] in /Users/kevin.chen/Development/wefarm_php/application/views/user/edit.php:6
2013-06-18 15:21:48 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/views/user/edit.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kevin.ch...', 6, Array)
#1 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(61): include('/Users/kevin.ch...')
#2 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kevin.ch...', Array)
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kevin.chen/Development/wefarm_php/application/views/template.php(11): Kohana_View->__toString()
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(61): include('/Users/kevin.ch...')
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kevin.ch...', Array)
#7 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/kevin.chen/Development/wefarm_php/application/views/user/edit.php:6
2013-06-18 15:22:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH/views/user/edit.php [ 6 ] in /Users/kevin.chen/Development/wefarm_php/application/views/user/edit.php:6
2013-06-18 15:22:16 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/views/user/edit.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kevin.ch...', 6, Array)
#1 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(61): include('/Users/kevin.ch...')
#2 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kevin.ch...', Array)
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kevin.chen/Development/wefarm_php/application/views/template.php(11): Kohana_View->__toString()
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(61): include('/Users/kevin.ch...')
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kevin.ch...', Array)
#7 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/kevin.chen/Development/wefarm_php/application/views/user/edit.php:6
2013-06-18 15:22:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH/views/user/edit.php [ 6 ] in /Users/kevin.chen/Development/wefarm_php/application/views/user/edit.php:6
2013-06-18 15:22:18 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/views/user/edit.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kevin.ch...', 6, Array)
#1 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(61): include('/Users/kevin.ch...')
#2 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kevin.ch...', Array)
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kevin.chen/Development/wefarm_php/application/views/template.php(11): Kohana_View->__toString()
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(61): include('/Users/kevin.ch...')
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kevin.ch...', Array)
#7 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/kevin.chen/Development/wefarm_php/application/views/user/edit.php:6
2013-06-18 15:22:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH/views/user/edit.php [ 6 ] in /Users/kevin.chen/Development/wefarm_php/application/views/user/edit.php:6
2013-06-18 15:22:19 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/views/user/edit.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kevin.ch...', 6, Array)
#1 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(61): include('/Users/kevin.ch...')
#2 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kevin.ch...', Array)
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kevin.chen/Development/wefarm_php/application/views/template.php(11): Kohana_View->__toString()
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(61): include('/Users/kevin.ch...')
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kevin.ch...', Array)
#7 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/kevin.chen/Development/wefarm_php/application/views/user/edit.php:6
2013-06-18 15:22:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH/views/user/edit.php [ 6 ] in /Users/kevin.chen/Development/wefarm_php/application/views/user/edit.php:6
2013-06-18 15:22:22 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/views/user/edit.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kevin.ch...', 6, Array)
#1 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(61): include('/Users/kevin.ch...')
#2 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kevin.ch...', Array)
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kevin.chen/Development/wefarm_php/application/views/template.php(11): Kohana_View->__toString()
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(61): include('/Users/kevin.ch...')
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kevin.ch...', Array)
#7 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/kevin.chen/Development/wefarm_php/application/views/user/edit.php:6
2013-06-18 15:31:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/classes/Controller/User.php [ 135 ] in /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php:135
2013-06-18 15:31:02 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php(135): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kevin.ch...', 135, Array)
#1 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_User->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php:135
2013-06-18 15:33:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Controller/User.php [ 138 ] in /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php:138
2013-06-18 15:33:38 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php(138): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/kevin.ch...', 138, Array)
#1 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_User->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php:138
2013-06-18 15:35:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Controller/User.php [ 138 ] in /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php:138
2013-06-18 15:35:57 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php(138): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/kevin.ch...', 138, Array)
#1 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_User->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php:138
2013-06-18 15:39:59 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/views/template.php [ 14 ] in /Users/kevin.chen/Development/wefarm_php/application/views/template.php:14
2013-06-18 15:39:59 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/views/template.php(14): Kohana_Core::error_handler(4096, 'Object of class...', '/Users/kevin.ch...', 14, Array)
#1 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(61): include('/Users/kevin.ch...')
#2 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kevin.ch...', Array)
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/kevin.chen/Development/wefarm_php/application/views/template.php:14
2013-06-18 16:08:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Request::$param ~ APPPATH/classes/Controller/User.php [ 24 ] in /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php:24
2013-06-18 16:08:48 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php(24): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kevin.ch...', 24, Array)
#1 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_User->action_account()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php:24
2013-06-18 16:11:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Request::$params ~ APPPATH/classes/Controller/User.php [ 24 ] in /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php:24
2013-06-18 16:11:41 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php(24): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kevin.ch...', 24, Array)
#1 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_User->action_account()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php:24
2013-06-18 16:12:25 --- EMERGENCY: ErrorException [ 4 ]: parse error, expecting `','' or `';'' ~ APPPATH/views/user/account.php [ 27 ] in :
2013-06-18 16:12:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-18 16:14:48 --- EMERGENCY: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/Controller/User.php [ 32 ] in /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php:32
2013-06-18 16:14:48 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php(32): Kohana_Core::error_handler(2048, 'Creating defaul...', '/Users/kevin.ch...', 32, Array)
#1 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_User->action_account()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php:32
2013-06-18 16:17:09 --- EMERGENCY: ErrorException [ 2 ]: money_format() expects exactly 2 parameters, 1 given ~ APPPATH/views/template.php [ 28 ] in :
2013-06-18 16:17:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'money_format() ...', '/Users/kevin.ch...', 28, Array)
#1 /Users/kevin.chen/Development/wefarm_php/application/views/template.php(28): money_format('1')
#2 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(61): include('/Users/kevin.ch...')
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kevin.ch...', Array)
#4 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#11 {main} in :
2013-06-18 16:19:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: money ~ APPPATH/views/template.php [ 28 ] in /Users/kevin.chen/Development/wefarm_php/application/views/template.php:28
2013-06-18 16:19:34 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/views/template.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kevin.ch...', 28, Array)
#1 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(61): include('/Users/kevin.ch...')
#2 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kevin.ch...', Array)
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/kevin.chen/Development/wefarm_php/application/views/template.php:28